# FastAPI Sample

## Set up virtual environment

```bash
poetry env use $(cat .python-version)

poetry self add poetry-plugin-dotenv

poetry install
```

## Run web server

```bash
poetry run uvicorn main:app --reload
```

<http://localhost:8000/>

## Build image

```bash
docker build -t fastapi-sample .
```

## Check container

```bash
docker run -it --rm \
  --entrypoint bash \
  fastapi-sample
```

## Run container

```bash
docker run -it --rm \
  -p 8080:8000 \
  fastapi-sample
```

<http://localhost:8080/>
