<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->sacar(300);
echo $primeiraConta->recuperarSaldo();
