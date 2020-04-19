<?php
require_once('Calculadora.php');
$notas = array(9, 3, 10, 5, 10, 8);
//$notas = [];
$calculadora = new \Alura\Calculadora();
$calculadora->calculaMedia($notas);