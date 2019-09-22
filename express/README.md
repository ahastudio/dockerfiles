# Node.js + Express

```bash
docker build -t myapp-image .

docker run -d --name myapp-container \
    -p 8080:3000 \
    myapp-image

docker logs -f myapp-container
```
