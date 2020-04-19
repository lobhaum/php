<?php
declare(strict_types=1);

require_once 'autoload.php';

use Alura\ArrayUtils;

$correntistas_e_compras = [
    "Giovanni",
    12,
    "Maria",
    25,
    "Luis",
    "Luísa",
    "12"
];
ArrayUtils::remover(12, $correntistas_e_compras);