FROM composer:1.8.4

RUN apk add --update icu && \
    apk add --no-cache icu-dev

RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl

RUN docker-php-ext-install pdo pdo_mysql
