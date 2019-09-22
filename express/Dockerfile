FROM node:10.16.3

RUN npm install pm2 -g

WORKDIR /u/myapp

COPY package.json .
COPY package-lock.json .

RUN npm install

WORKDIR /u/myapp

COPY . /u/myapp

CMD ["pm2-runtime", "app.js"]
