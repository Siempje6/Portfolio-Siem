FROM php:8.4-fpm

RUN apt-get update && apt-get install -y \
    git zip unzip libpq-dev libzip-dev libonig-dev \
    curl nginx supervisor nodejs npm

RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring zip exif pcntl bcmath

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . /var/www/html

RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build || true

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

COPY ./deploy/nginx.conf /etc/nginx/sites-available/default

EXPOSE 80

CMD ["sh", "-c", "php artisan migrate --force && php-fpm -D && nginx -g 'daemon off;'"]
