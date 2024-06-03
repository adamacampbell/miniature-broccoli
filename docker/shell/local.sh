#!/bin/sh

# install xdebug via pecl and use the docker helper to enable it
pecl install xdebug && docker-php-ext-enable xdebug

# INSTALL COMPOSER
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
composer install

# RUN MIGRATIONS
php artisan migrate:fresh

# SEED DATABASE
php artisan db:seed
