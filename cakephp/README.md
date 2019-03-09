# CakePHP

```bash
docker build -t cakephp .
```

## Create a new project

### 1st way - Composer

```
mkdir -p ~/data/cakephp

docker run -it --rm \
    -v ~/data/cakephp:/app \
    cakephp \
    composer create-project --prefer-dist cakephp/app example
```

### 2nd way - Oven

<https://github.com/CakeDC/oven>

```
mkdir -p ~/data/cakephp

docker run -it --rm \
    -p 8765:8765 \
    -v ~/data/cakephp:/app \
    cakephp bash -c '
        curl https://raw.githubusercontent.com/CakeDC/oven/master/oven.php \
            -o oven.php
        php -S 0.0.0.0:8765
    '
```

http://localhost:8765/oven.php

## Development Server

```bash
docker run -it --rm \
    -p 8765:8765 \
    -v ~/data/cakephp:/app \
    cakephp bash -c 'cd /app/example && bin/cake server -H 0.0.0.0'
```

http://localhost:8765/
