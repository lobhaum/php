<?php


$contasCorrentes = [
    35111 => [
        'nome' => 'Vinicius',
        'saldo' => 1000
    ],
    35099 => [
        'nome' => 'Pinguim de Madagascar',
        'saldo' => 50000
    ],
    351103 => [
        'nome' => 'Pinguim do Google',
        'saldo' => 520000
    ]
];
$contasCorrentes[47991] = [
        'nome' => 'Tamandaré Tintas',
        'saldo' => 35974.12
];
foreach ($contasCorrentes as $chave => $conta){
    echo "C.C: ". $chave. " => ".$conta['nome'].PHP_EOL;
}