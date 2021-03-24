FROM ruby:2.6.0

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y pkg-config libxml2 && \
    curl -sL https://deb.nodesource.com/setup_8.x | bash - && \
    apt-get install -y nodejs && \
    rm -rf /var/lib/apt/lists/*

RUN gem install rubygems-update --no-document && \
    update_rubygems && \
    gem update --system && \
    gem install bundler --no-document

WORKDIR /tmp

ADD Gemfile /tmp/Gemfile
ADD Gemfile.lock /tmp/Gemfile.lock

RUN bundle install --binstubs --without development:test

WORKDIR /u/myapp

ADD . /u/myapp

RUN mv /tmp/bin /u/myapp/bin

ENV RAILS_ENV production

CMD rails db:migrate && \
    puma

EXPOSE 3000
