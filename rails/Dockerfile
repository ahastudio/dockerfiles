FROM ruby:2.7.2

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y --no-install-recommends libxml2 && \
    rm -rf /var/lib/apt/lists/*

RUN gem install rubygems-update --no-document && \
    update_rubygems && \
    gem update --system && \
    gem install bundler rails:6.1.3 --no-document
