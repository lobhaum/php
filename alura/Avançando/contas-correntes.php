<?php

$conta01 = [
    'nome' => 'Vinicius',
    'saldo' => 1000
];
$conta02 = [
    'nome' => 'Pinguim de Madagascar',
    'saldo' => 50000
];
$conta03 = [
    'nome' => 'Pinguim do Google',
    'saldo' => 520000
];
$contasCorrentes = [
    $conta01,
    $conta02,
    $conta03
];
//var_dump($contasCorrentes);

//for ($i = 0; $i < count($contasCorrentes); $i++){
//    echo $contasCorrentes[$i]['titular'].PHP_EOL;
//}
//foreach ($contasCorrentes[$key] as $titular) {
//    echo "$titular['$titular']";
//}
for($i = 0; $i < sizeof($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['nome'].PHP_EOL;
}