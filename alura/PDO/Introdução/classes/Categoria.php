<?php

class Categoria
{
    public $id;
    public $nome;

    public function listar(): array
    {
        $query = 'SELECT id, nome FROM categorias';
        $conexao = new PDO('mysql:host=192.168.1.100;dbname=estoque', 'programador', 'Brasil2020');
        $resultado = $conexao->query($query);

        return $resultado->fetchAll();
    }
}
