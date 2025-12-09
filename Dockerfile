# Base image
FROM php:8.4-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git zip unzip libzip-dev libonig-dev curl nginx supervisor \
    libpq-dev libsqlite3-dev nodejs npm

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_pgsql pdo_mysql mbstring zip exif pcntl bcmath

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Build frontend assets (optioneel, bijvoorbeeld voor Breeze/Vite)
RUN npm install && npm run build || true

# Set permissions for storage & cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Copy Nginx config
COPY ./deploy/nginx.conf /etc/nginx/sites-available/default

# Expose port
EXPOSE 80

# Fix for runtime environment: clear cache & migrate at container start
# DATABASE_URL en SESSION_DRIVER worden nu correct gebruikt bij runtime
CMD ["sh", "-c", "\
    php artisan migrate --force && \
    php artisan config:clear && \
    php artisan cache:clear && \
    php artisan route:clear && \
    php artisan view:clear && \
    php-fpm -D && \
    nginx -g 'daemon off;' \
"]
