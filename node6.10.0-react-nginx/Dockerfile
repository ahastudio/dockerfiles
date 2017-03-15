FROM node:6.10.0

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y nginx && \
    rm -rf /var/lib/apt/lists/*

WORKDIR /tmp

ADD package.json /tmp/package.json
ADD yarn.lock /tmp/yarn.lock

RUN npm install yarn
RUN yarn install

WORKDIR /u/myapp

ADD . /u/myapp

RUN mv /tmp/node_modules .

RUN yarn build

RUN mv build/* /var/www/html/

CMD ["nginx", "-g", "daemon off;"]

EXPOSE 80
