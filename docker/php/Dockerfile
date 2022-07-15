FROM php:8.0-fpm

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
            libcurl4-openssl-dev \
            libicu-dev \
            libzip-dev \
            wget \
            git
RUN docker-php-ext-install -j$(nproc) zip intl
RUN rm -rf /var/lib/apt/lists/*

# Composer
RUN wget https://github.com/composer/composer/releases/download/2.3.7/composer.phar && \
    mv composer.phar /usr/local/bin/composer && \
    chmod +x /usr/local/bin/composer

#xDebug
RUN pecl install xdebug-3.1.5 && \
    docker-php-ext-enable xdebug
COPY ./conf/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

ARG PUID=1000
RUN usermod -u ${PUID} www-data
USER www-data