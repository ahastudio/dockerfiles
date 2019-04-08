FROM python:3.7.2

RUN apt-get update && \
    apt-get upgrade -y && \
    rm -rf /var/lib/apt/lists/*

RUN pip install -U pip

WORKDIR /tmp

ADD requirements.txt /tmp/requirements.txt

RUN pip install -r requirements.txt

WORKDIR /u/myapp

ADD . /u/myapp

CMD flask run --host=0.0.0.0

EXPOSE 5000
