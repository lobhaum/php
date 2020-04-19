<?php
declare(strict_types=1); //não realiza conversão automatica dos tipos

namespace Alura;

class ArrayUtils
{
    public static function remover(int $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array, true);
        if (is_int($posicao)) {
            echo "Elemento $array[$posicao] excluido com sucesso";
            unset($array[$posicao]);
        }
        if (!is_int($posicao)) {
            echo "Não foi encontrado no array";
        }

    }

    public static function saldoMaior(int $saldo, array $array): array
    {
        $correntistasSaldoMaior = array();
        foreach ($array as $chave => $valor) {
            if ($valor > $saldo) {
                $correntistasSaldoMaior[] = $chave;
            }
        }
        return $correntistasSaldoMaior;
    }
}