# Poppler

<https://poppler.freedesktop.org/>

## Build image

```bash
docker build -t poppler .
```

## Run

```bash
docker run -it --rm --name poppler \
  -v $(pwd):/home/work \
  poppler bash
```
