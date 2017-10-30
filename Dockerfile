FROM php:7.1-fpm

RUN apt-get update && apt-get install -y curl

RUN curl -s https://getcomposer.org/installer | php \
    && mv composer.phar /usr/bin/composer

WORKDIR /var/www/project