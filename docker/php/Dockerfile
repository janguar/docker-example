FROM php:7.2.5-fpm-alpine3.7
#install all the dependencies
RUN apk update && apk add \
    curl-dev \
    libzip-dev \ 
    freetype-dev \
    libjpeg-turbo-dev \ 
    libpng-dev \
    libxml2-dev \
    gettext-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql zip gd mbstring xml curl json gettext tokenizer