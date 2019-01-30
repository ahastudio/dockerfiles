# phpDocumentor

Use PHP+Composer Official Image: <https://hub.docker.com/_/composer/>

```bash
docker build -t phpdoc .
```

```bash
docker run -it --rm \
    -v $(pwd)/../output:/u/phpdoc/output \
    -v $(pwd)/../_example:/u/src \
    phpdoc
```

```bash
open ../output/index.html
```
