<?php include __DIR__ . "/../header.html.php";?>
    <a href="novo-curso" class="btn btn-primary mb-2">Novo curso</a>
    <ul class="list-group">
        <?php foreach ($cursos as $curso) {?>
            <li class="list-group-item">
                <?php echo $curso->getDescricao(); ?>
            </li>
        <?php }?>
    </ul>
<?php include __DIR__ . "/../bottom.html.php";?>