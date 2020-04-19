<?php

$notas = array(9, 3, 10, 5, 10);

echo "<pre>";
echo "a nota de portugues é: $notas[0]\n\r";
echo "a nota de matematica é: $notas[1]\n\r";
echo "a nota de geografia é: $notas[2]\n\r";
echo "a nota de historia é: $notas[3]\n\r";
echo "a nota de quimica é: $notas[4]\n\r";

$media = ($notas[0] + $notas[1]
        + $notas[2] + $notas[3]
        + $notas[4]) / sizeof($notas);

echo "A media é: $media\n\r";

echo "</pre>";
