FROM php:8.2-fpm
WORKDIR /var/www
RUN apt-get update &&     apt-get install -y git curl libpng-dev libonig-dev libxml2-dev zip unzip &&     docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY . /var/www
