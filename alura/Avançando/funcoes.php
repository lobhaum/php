<?php
function exibiMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valor): array
{
    if ($conta['saldo'] < $valor) exibirMensagem('Saldo insuficiente para saque');
    return $conta['saldo'] -= $valor;
}

function depositar(array $conta, float $valor): array
{
    if ($valor <= 0) {
        exibirMensagem('Valor informado invalido');
        return 0;
    }
    $conta['saldo'] += $valor;
    return $conta;

}