# phpenv

```bash
docker build -t phpenv .

docker run -it --rm phpenv

docker run -it --rm -p 8080:8080 -v $(PWD)/www:/root/www phpenv \
    bash -c 'cd /root/www && php -S 0.0.0.0:8080'
```
