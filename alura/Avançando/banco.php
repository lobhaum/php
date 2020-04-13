<?php

require_once 'funcoes.php';
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
$contasCorrentes[35111] = depositar($contasCorrentes[35111], 10000);

foreach ($contasCorrentes as $conta) {
   echo"CC: {$conta['nome']} - Saldo: R$ {${number_format($conta['saldo'], 2, ',', '.')}}";

}