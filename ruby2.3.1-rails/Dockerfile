FROM ruby:2.3.1

RUN apt-get update && \
    apt-get upgrade -y && \
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

WORKDIR /home/app

ADD . /home/app

RUN mv /tmp/bin /home/app/bin

ENV RAILS_ENV production

CMD puma

EXPOSE 3000
