FROM php:7.3.1

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get upgrade -y git-core graphviz && \
    rm -rf /var/lib/apt/lists/*

# https://getcomposer.org/download/
# https://getcomposer.org/doc/00-intro.md#globally
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer

WORKDIR /u/phpdoc

ADD . .

RUN composer install --prefer-dist

CMD vendor/bin/phpdoc -d /u/src --ignore */vendor/*
