FROM node:8.5.0

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y nginx && \
    rm -rf /var/lib/apt/lists/*

RUN npm install -g yarn

WORKDIR /u/node

ADD package.json /u/node/package.json
ADD yarn.lock /u/node/yarn.lock

RUN yarn install

WORKDIR /u/myapp

ADD . /u/myapp

RUN ln -s /u/node/node_modules /u/myapp/node_modules

RUN yarn build

RUN rm -rf /var/www/html/*
RUN mv build/* /var/www/html/

CMD ["nginx", "-g", "daemon off;"]

EXPOSE 80
