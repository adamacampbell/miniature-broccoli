# SET BUILD ARGS
ARG BUILD_ENV=staging
ARG ENV_FILE

FROM php:8.2-fpm

ARG BUILD_ENV
ARG ENV_FILE

# SET ENVIRONMENT VARIABLES
ENV BUILD_ENV ${BUILD_ENV}
ENV ENV_FILE ${ENV_FILE}

WORKDIR /var/www/cinema-api

# INSTALL PLUGINS
RUN apt-get update && apt-get install -y \
    build-essential \
    curl \
    git \
    jpegoptim optipng pngquant gifsicle \
    locales \
    unzip \
    vim \
    nano \
    zip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# COPY APPLICATON
COPY ./application/ /var/www/cinema-api

# COPY PHP CONFIG
COPY config/php/local /usr/local/etc/php/conf.d

# SET OWNERSHIP
RUN chown -R www-data:www-data \
    /var/www/cinema-api/storage \
    /var/www/cinema-api/bootstrap/cache

# Miscellaneous
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install exif
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install pcntl

# SETUP REDIS
RUN pecl install redis \
&& rm -rf /tmp/pear \
&& docker-php-ext-enable redis

# Install specific version of Node.js with npm through nvm
SHELL ["/bin/bash", "--login", "-c"]
RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.1/install.sh | bash
RUN nvm install v20.9.0

# COPY POST INSTALL SCRIPT
COPY ./docker/shell/${BUILD_ENV}.sh /tmp/build.sh
RUN chmod u+x /tmp/build.sh

CMD /bin/sh -c /tmp/build.sh && php-fpm