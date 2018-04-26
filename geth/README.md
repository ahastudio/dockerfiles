```
$ mkdir -p ~/ethereum/ethash
$ mkdir -p ~/ethereum/keystore
$ mkdir -p ~/ethereum/config
$ cp config/genesis.json ~/ethereum/config/
```

```
$ docker pull ethereum/client-go
```

```
$ docker run -it --rm \
    -v ~/ethereum:/root/.ethereum \
    ethereum/client-go account new
```

```
$ docker run -it --rm \
    -v ~/ethereum:/root/.ethereum \
    ethereum/client-go init /root/.ethereum/config/genesis.json
```

```
$ docker build -t geth .
```

```
$ docker run -d --name geth \
    -p 8545:8545 \
    -p 8546:8546 \
    -p 30303:30303 \
    -v ~/ethereum:/root/.ethereum \
    -v ~/ethereum/ethash:/root/.ethash \
    geth
```

```
$ docker logs -f geth
```
