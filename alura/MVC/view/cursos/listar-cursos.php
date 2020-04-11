<?php include __DIR__ . "/../header.html.php";?>
    <a href="novo-curso" class="btn btn-primary mb-2">Novo curso</a>
    <ul class="list-group">
        <?php foreach ($cursos as $curso) {?>
            <li class="list-group-item d-flex justify-content-between">
                <?php echo $curso->getDescricao(); ?>
                <a href="excluir-curso?id=<?= $curso->getId();?>" class="btn btn-danger btn-sm">Excluir</a>
            </li>
        <?php }?>
    </ul>
<?php include __DIR__ . "/../bottom.html.php";?>