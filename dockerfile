# 1. Basis image met PHP en Apache
FROM php:8.2-apache

# 2. Installeer PHP-extensies nodig voor Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    sqlite3 \
    libsqlite3-dev \
    git \
    curl \
 && docker-php-ext-install pdo pdo_sqlite mbstring exif pcntl bcmath gd

# 3. Composer installeren
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 4. Zet werkdirectory
WORKDIR /var/www/html

# 5. Kopieer bestanden
COPY . .

# 6. Installeer Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# 7. Zorg dat storage folder writeable is voor SQLite
RUN chown -R www-data:www-data storage bootstrap/cache

# 8. Expose poort (Render gebruikt $PORT)
ENV PORT=10000
EXPOSE 10000

# 9. Start Laravel server
CMD php artisan serve --host 0.0.0.0 --port $PORT
