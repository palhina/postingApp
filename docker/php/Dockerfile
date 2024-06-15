FROM php:8.1.2-fpm

COPY php.ini /usr/local/etc/php/

RUN apt update \
    && apt install -y default-mysql-client zlib1g-dev libzip-dev unzip \
    && docker-php-ext-install pdo_mysql zip

RUN apt-get update && \
    apt-get install -y libpng-dev libjpeg62-turbo-dev && \
    docker-php-ext-configure gd --with-jpeg && \
    docker-php-ext-install -j$(nproc) gd

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && composer self-update

RUN curl -sL https://deb.nodesource.com/setup_16.x | bash -
RUN apt-get install -y nodejs

WORKDIR /var/www