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

    public function atualizar(): void
    {
        $query = "UPDATE categorias set nome = {$this->nome} WHERE id = {$this->id};";
        $conexao = Conexao::getConexao();
        $conexao->exec($query);
    }

    public function carregar(): array
    {
        $query = "SELECT id, nome FROM categorias WHERE id = {$this->id};";
        $conexao = Conexao::getConexao();
        $resultado = $conexao->query($query);

        $lista = $resultado->fetchAll();
        foreach ($lista as $linha) {
            return $linha;
        }
    }
}
