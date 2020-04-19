<?php
require_once 'autoload.php';
use Alura\ArrayUtils;

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];

$correntistasNaoPagantes = [
    "Luis",
    "Luisa",
    "Rafael",
];

$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);
echo "<pre>";
print_r($correntistasPagantes);
echo "</pre>";

$correntistasGeral = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];
$relacionados = array_merge($correntistasGeral, $saldos);
echo "<pre>";
print_r($relacionados);

$combinados = array_combine($correntistasGeral, $saldos);
print_r($combinados);

echo "o saldo do Giovanni é $combinados[Giovanni]";
$maiores = ArrayUtils::saldoMaior(3000, $relacionados);

print_r($maiores);
echo "</pre>";

