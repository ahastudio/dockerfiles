# phpenv

# https://wiki.ubuntu.com/Releases
FROM ubuntu:18.04

# https://github.com/phpbrew/phpbrew/blob/master/src/PhpBrew/Topic/RequirementTopic.php
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y \
        git-core build-essential autoconf \
        curl libcurl4-gnutls-dev \
        openssl libssl-dev \
        gettext libgettextpo-dev libgettextpo0 \
        bison re2c libxml2 libxml2-dev libxslt1-dev libtidy-dev \
        libreadline-dev libzip-dev libbz2-dev \
        libgd-dev libgd3 libxpm4 libfreetype6 libfreetype6-dev \
        libpng-dev libjpeg-dev libjpeg8-dev libjpeg8 \
        libmhash-dev libmhash2 libmcrypt-dev libmcrypt4 && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

ENV HOME /root

RUN git clone git://github.com/phpenv/phpenv.git $HOME/.phpenv

ENV PATH $HOME/.phpenv/bin:$HOME/.phpenv/shims:$PATH

RUN git clone https://github.com/php-build/php-build \
    $(phpenv root)/plugins/php-build

RUN phpenv rehash

RUN echo 'export PATH="$HOME/.phpenv/bin:$PATH"' >> ~/.bash_profile && \
    echo 'eval "$(phpenv init -)"' >> ~/.bash_profile && \
    echo '\n\nsource ~/.bash_profile' >> ~/.bashrc

RUN phpenv install 7.3.2 && \
    phpenv global 7.3.2

WORKDIR $HOME

CMD bash
