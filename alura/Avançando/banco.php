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

$contasCorrentes = [
    35111 => [
        'nome' => 'Vinicius',
        'saldo' => 1100.59
    ],
    35099 => [
        'nome' => 'Pinguim de Madagascar',
        'saldo' => 4569.0
    ],
    351103 => [
        'nome' => 'Pinguim do Google',
        'saldo' => 520000.10
    ]
];
//$contasCorrentes = sacar($contasCorrentes[35111], 500);
$contasCorrentes[35111] = depositar($contasCorrentes[35111], 10000);

//if (500 > $contasCorrentes[351103]['saldo']) {
//    exibeMensagem("Você não pode sacar este valor");
//} else
//    $contasCorrentes[351103]['saldo'] -= 500;
//
//
//if (500 > $contasCorrentes[35099]['saldo']) {
//    exibeMensagem("Você não pode sacar este valor");
//} else
//    $contasCorrentes[35099]['saldo'] -= 500;

foreach ($contasCorrentes as $conta) {
    echo "CC: " . $conta['nome'] . " - Saldo: R$" . number_format($conta['saldo'], 2, ',', '.') . PHP_EOL;
}