FROM php:8.3.0-fpm

# COPY php.ini /usr/local/etc/php/
COPY docker.conf /usr/local/etc/php-fpm.d/docker.conf
COPY .bashrc /root/

RUN apt-get update \
    && apt-get install -y build-essential zlib1g-dev default-mysql-client curl gnupg procps vim git unzip libzip-dev libpq-dev  libpng-dev libjpeg-dev libwebp-dev libxpm-dev \
    && docker-php-ext-install zip pdo_mysql pdo_pgsql pgsql gd

RUN apt-get install -y libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl

RUN apt-get update && apt install -y openssl

# php image-magick extension
RUN apt-get update \
    && apt-get install -y ghostscript libmagickwand-dev \
    && pecl install imagick \
    && docker-php-ext-enable imagick

# Bun
RUN apt install unzip
RUN curl -fsSL https://bun.sh/install | bash
RUN exec /usr/bin/bash

# Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin
RUN composer config --global process-timeout 3600

WORKDIR /root

EXPOSE 5173
WORKDIR /var/www
