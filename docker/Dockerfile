FROM php:7.2-fpm

RUN apt-get update && apt-get install -y curl git vim gzip zlib1g-dev mysql-client libicu-dev 

RUN docker-php-ext-install mbstring bcmath zip mysqli pdo_mysql intl

RUN curl -s https://getcomposer.org/installer | php \
    && mv composer.phar /usr/bin/composer

WORKDIR /var/www/project
