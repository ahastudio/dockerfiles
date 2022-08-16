# Geth - Go Ethereum

- [Private Networks](https://geth.ethereum.org/docs/interface/private-network)
- [JavaScript Console](https://geth.ethereum.org/docs/interface/javascript-console)

## 폴더 및 파일 준비

```bash
mkdir -p ~/ethereum/ethash
mkdir -p ~/ethereum/keystore
mkdir -p ~/ethereum/config

cp config/genesis.json ~/ethereum/config/
```

## Docker 이미지 준비

```bash
docker pull ethereum/client-go
```

## 계정 만들기

```bash
docker run -it --rm \
    -v ~/ethereum:/root/.ethereum \
    ethereum/client-go account new
```

## 제네시스 블록 생성

```bash
docker run -it --rm \
    -v ~/ethereum:/root/.ethereum \
    ethereum/client-go init /root/.ethereum/config/genesis.json
```

## Docker 이미지 빌드

```bash
docker build -t geth .
```

## Docker 컨테이너 띄우기

```bash
docker run -d --name geth \
    -p 8545:8545 \
    -p 8546:8546 \
    -p 30303:30303 \
    -v ~/ethereum:/root/.ethereum \
    -v ~/ethereum/ethash:/root/.ethash \
    -e MINER_ADDRESS=0x7df9a875a174b3bc565e6424a0050ebc1b2d1d82 \
    geth
```

```bash
docker logs -f geth
```

## 콘솔 실행

```bash
docker exec -it geth sh -c "geth attach ~/.ethereum/geth.ipc"
```

```js
eth.blockNumber

eth.accounts

eth.coinbase

web3.fromWei(eth.getBalance(eth.coinbase))
```
