FROM python:3.5.2

RUN apt-get update && \
    apt-get upgrade -y && \
    rm -rf /var/lib/apt/lists/*

RUN pip install -U pip

WORKDIR /tmp

ADD requirements.txt /tmp/requirements.txt

RUN pip install -r requirements.txt

WORKDIR /home/myapp

ADD . /home/myapp

CMD python app.py

EXPOSE 5000
