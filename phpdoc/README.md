# phpDocumentor

## Use Dockerfile

- `php`
- `composer` (recommended)

## Use phpdoc image

<https://hub.docker.com/r/phpdoc/phpdoc/>

```bash
docker run -it --rm \
    -v $(pwd)/output:/data/output \
    -v $(pwd)/_example:/u/src \
    phpdoc/phpdoc -d /u/src --ignore */vendor/*
```

```bash
open output/index.html
```
