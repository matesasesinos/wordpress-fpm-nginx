FROM php:8.1.11-fpm

WORKDIR /var/www/html

COPY app* /var/www/html

COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN install-php-extensions zip
RUN  apt update && apt install -y unzip

RUN set -eux; \
    composer install

CMD ["php-fpm"]