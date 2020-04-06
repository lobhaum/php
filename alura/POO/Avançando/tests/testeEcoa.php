<?php

namespace Alura\Banco\Testes;

require_once 'Config/AutoLoad.php'; // carrega arquivo autoload

use Alura\Banco\Config\AutoLoad; // usa o pacote autoload
use Alura\Banco\Debug\Ecoa;

AutoLoad::getNamespace(); // instanciando o namespace estaticamente

$var = new Ecoa('Ola mundo');

echo $var->getEcoa();
