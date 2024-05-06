FROM gradle:8.7-jdk17-alpine AS builder

WORKDIR /u/app

COPY gradle ./gradle
COPY gradlew .
COPY settings.gradle.kts .
COPY build.gradle.kts .

RUN ./gradlew getDeps --no-daemon --info

COPY . .

RUN ./gradlew bootJar --no-daemon --info

###############################################################################

FROM eclipse-temurin:17-jdk-alpine

WORKDIR /u/app

COPY --from=builder /u/app/build/libs/demo-0.0.1-SNAPSHOT.jar app.jar

CMD java -jar app.jar
