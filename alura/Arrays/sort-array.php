<?php
$saldos = [
    2500,
    3000,
    1000,
    3700,
    9000
];

foreach  ($saldos as $saldo) {
    echo "<p>O saldo é $saldo</p>".PHP_EOL;
}
//echo "<pre>";
//print_r($saldos);
//sort($saldos);
//print_r($saldos);
//echo "</pre>";
sort($saldos);
echo "o menor saldo é $saldos[0]<br>".PHP_EOL;