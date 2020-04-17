<?php

class Categoria
{

    public $id;
    public $nome;

    public function listar()
    {
        $query = "SELECT id, nome FROM categorias";
        $conexao = new PDO('mysql:host=localhost;dbname=estoque', 'root', 'alura');
        $resultado = $conexao->query($query);
        return $resultado->fetchAll();
    }
}