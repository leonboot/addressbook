FROM php:7.2-fpm

MAINTAINER wlboot@gmail.com

RUN docker-php-source extract && \
    docker-php-ext-install -j$(nproc) mysqli pdo pdo_mysql && \
    docker-php-source delete
