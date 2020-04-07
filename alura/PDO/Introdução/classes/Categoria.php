<?php

require_once 'config/Conexao.php';

class Categoria
{
    public $id;
    public $nome;

    public function listar(): array
    {
        $query = 'SELECT id, nome FROM categorias';
        $conexao = Conexao::getConexao();
        $resultado = $conexao->query($query);

        return $resultado->fetchAll();
    }

    public function inserir(): void
    {
        $query = "INSERT INTO categorias(nome) VALUES ('{$this->nome}')";
        $conexao = Conexao::getConexao();
        $conexao->exec($query);
    }
}
