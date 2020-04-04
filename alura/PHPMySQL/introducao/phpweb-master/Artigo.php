<?php
require 'config.php';
require 'src/Artigo.php';

$obj_artigo = new Artigo($mysql);
$artigo = $obj_artigo->exibirUm($_GET['titulo']);


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1><?php echo $artigo['titulo'];?></h1>
        <p><?php echo $artigo['conteudo'];?></p>
        <div>
            <a href="index.php" class="botao botao-click">Voltar</a>
        </div>
    </div>
</body>

</html>