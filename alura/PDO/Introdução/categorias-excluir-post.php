<?php
require_once 'autoload.php';
$id = $_GET['id']; // pq estou usando query string o método deve ser $_GET
$categoria = new Categoria($id);
$categoria->excluir();
header('Location: categorias.php');


