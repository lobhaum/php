<?php

class Artigo
{
    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function exibirTodos(): array
    {
        $resultado = $this->mysql->query('SELECT * FROM artigos;');
        $artigos = $resultado->fetch_all(MYSQLI_ASSOC);
        return $artigos;
    }

    public function exibirUm(string $titulo): array
    {
        $resultado = $this->mysql->prepare("SELECT * FROM artigos WHERE titulo = ?");
        $resultado->bind_param('s', $titulo);
        $resultado->execute();
        $artigo = $resultado->get_result()->fetch_assoc();
        
        return $artigo;
    }

    public function adicionar(string $titulo, string $conteudo): void{
        $resultado = $this->mysql->prepare("INSERT INTO artigos (titulo, conteudo) VALUES (?, ?);");
        $resultado->bind_param('ss', $titulo, $conteudo);
        $resultado->execute();
    }
}
