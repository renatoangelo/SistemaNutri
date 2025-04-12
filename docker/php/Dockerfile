FROM php:8.1-fpm

# Instala extensões necessárias
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-install pdo pdo_mysql zip gd
