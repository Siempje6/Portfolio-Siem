# ---- Stage 0: Base PHP + extensions ----
FROM php:8.4-fpm

# System dependencies
RUN apt-get update && apt-get install -y \
    git zip unzip libpq-dev libzip-dev libonig-dev \
    curl nginx supervisor nodejs npm

# PHP extensions
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring zip exif pcntl bcmath

# Composer installeren
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Werkomgeving
WORKDIR /var/www/html

# Code kopiëren
COPY . /var/www/html

# Composer dependencies
RUN composer install --no-dev --optimize-autoloader

# Node dependencies & build assets
RUN npm install && npm run build || true

# Storage & cache permissies
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Nginx configuratie kopiëren
COPY ./deploy/nginx.conf /etc/nginx/sites-available/default

# Expose port
EXPOSE 80

# Start container: migrate, php-fpm + nginx
CMD ["sh", "-c", "php artisan migrate --force && php-fpm -D && nginx -g 'daemon off;'"]
