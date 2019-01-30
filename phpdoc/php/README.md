# phpDocumentor

Use PHP Official Image: <https://hub.docker.com/_/php/>

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
