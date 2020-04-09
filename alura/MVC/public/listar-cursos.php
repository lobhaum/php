<?php
require __DIR__.'/../vendor/autoload.php';

$entityManager = (new \Alura\Cursos\Infra\EntityManagerCreator())->getEntityManager();
$repositorioDeCursos = $entityManager->getRepository(\Alura\Cursos\Entity\Curso::class);
$cursos = $repositorioDeCursos->findAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>Listar cursos</h1>
    </div>
    <a href="novo-curso" class="btn btn-primary mb-2">Novo curso</a>
    <ul class="list-group">
        <?php foreach ($cursos as $curso) { ?>
            <li class="list-group-item">
                <?php echo $curso->getDescricao(); ?>
            </li>
        <?php } ?>
    </ul>
</div>
</body>
</html>