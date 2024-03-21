FROM python:3.12.2-slim

WORKDIR /u/myapp

ENV POETRY_VERSION 1.8.2

COPY poetry.lock pyproject.toml ./

RUN pip install --upgrade pip && \
    pip install poetry==$POETRY_VERSION && \
    poetry config virtualenvs.create false --local && \
    poetry install --only main --no-interaction --no-ansi

COPY . .

ENTRYPOINT ["uvicorn", "main:app", "--host", "0.0.0.0", "--port", "8000"]
