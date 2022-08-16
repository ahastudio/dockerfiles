FROM ethereum/client-go

ENTRYPOINT []

CMD geth \
    --networkid 1234 \
    --http \
    --http.addr "0.0.0.0" \
    --http.api "eth,net,web3,admin,personal" \
    --http.corsdomain "*" \
    --nodiscover \
    --mine \
    --miner.threads=1 \
    --miner.etherbase="$MINER_ADDRESS"
