<?php

class Conta
{

    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        echo "criando nova conta";
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
    }


    public function sacar(float $valorSacar): void
    {
        if ($valorSacar > $this->saldo) {
            echo "saldo indisponivel";
            return;
        }
        $this->saldo -= $valorSacar;
    }

    public function depositar(float $valorDepositar): void
    {
        if ($valorDepositar < 0) {
            echo "Valor deve ser positivo";
            return;
        }

        $this->saldo += $valorDepositar;
    }

    public function transferir(float $valorTransferir, Conta $contaDestino): void
    {

        if ($valorTransferir > $this->saldo) {
            echo "Saldo indisponivel";
            return;
        }
        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }
}
