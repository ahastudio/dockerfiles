FROM ethereum/client-go

ENTRYPOINT []

CMD geth \
    --networkid 1234 \
    --rpc --rpcaddr "0.0.0.0" \
    --rpcapi "eth,net,web3,admin,personal" \
    --rpccorsdomain "*" \
    --nodiscover \
    --mine
