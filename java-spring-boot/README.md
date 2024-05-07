# Java + Spring Boot

Java 17과 Spring Boot 3.2.5 기준.

## `getDeps` 태스크 추가

```kts
tasks.register<Copy>("getDeps") {
    from(configurations.runtimeClasspath)
    from(configurations.compileClasspath)
    into("tmp/libs/")
}
```

## Docker 이미지 빌드

```bash
docker build --progress=plain --platform linux/amd64 -t demo .
```

## Docker 컨테이너 실행

```bash
docker run -d --name demo \
    --platform linux/amd64 \
    -p 8080:8080 \
    demo

docker logs -f demo
```
