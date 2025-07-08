# Dockerfile

FROM php:8.2-fpm-alpine

RUN apk add --no-cache \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install zip pdo pdo_mysql

WORKDIR /var/www/html

COPY . .

RUN docker-php-ext-install pdo pdo_mysql

RUN chown -R www-data:www-data /var/www/html

# RUN pecl install xdebug && docker-php-ext-enable xdebug

# COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini