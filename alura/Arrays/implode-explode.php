<?php
$nomes = "Giovanni, João, Maria, Pedro";
$convertStringToArray = explode(",",$nomes);
foreach ($convertStringToArray as $nome) {
    echo $nome.PHP_EOL;
}

$array = [ "pilhas", "cotonetes", "sabão em pó", "frutas"];
$convertArrayToString = implode(" ", $array);

echo $convertArrayToString;

$emails = "ana@empresa.com.br;junior@empresa.com.br;maria@empresa.com.br";
$converterEmailsToArray = explode(";", $emails);
var_dump($converterEmailsToArray);


