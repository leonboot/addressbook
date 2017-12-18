FROM php:7.2-fpm

MAINTAINER wlboot@gmail.com

RUN docker-php-source extract && \
    docker-php-ext-install -j$(nproc) mysqli pdo pdo_mysql && \
    docker-php-source delete && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    php -r "unlink('composer-setup.php');" && \
    chown -R www-data:www-data /var/www
