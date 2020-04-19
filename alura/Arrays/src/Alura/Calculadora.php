<?php


namespace Alura;


class Calculadora
{
    public function calculaMedia(array $notas): ?float
    {
        if(sizeof($notas) <= 0){
            echo "Impossivel efetuar a média";
            return null;
        }

        $soma = 0;

        foreach ($notas as $nota) {
            $soma += $nota;
        }
        $media = $soma / sizeof($notas);

        return $media;
        //echo "A media é: $media\n\r";

    }
}