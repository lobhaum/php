<?php
$notaPortugues = 9;
$notaMatematica = 3;
$notaGeografia = 10;
$notaHistoria = 5;
$notaQuimica = 10;

echo "<pre>";
echo "a nota de portugues é: $notaPortugues\n\r";
echo "a nota de matematica é: $notaMatematica\n\r";
echo "a nota de geografia é: $notaGeografia\n\r";
echo "a nota de historia é: $notaHistoria\n\r";
echo "a nota de quimica é: $notaQuimica\n\r";

$media = ($notaPortugues + $notaMatematica
    + $notaGeografia + $notaHistoria
    + $notaQuimica)/5;

echo "A media é: $media\n\r";

echo "</pre>";