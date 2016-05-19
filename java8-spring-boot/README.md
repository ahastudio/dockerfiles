사용 예:
```
$ export IMAGE_NAME=my-image:1.0.0
$ docker build -t $IMAGE_NAME .
$ docker run -v ~/.gradle:/root/.gradle $IMAGE_NAME bash -c './gradlew assemble'
```
