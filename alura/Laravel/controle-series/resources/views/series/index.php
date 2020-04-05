<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Olá mundo :: Series :: </p>

    <ul>
        <?php foreach ($series as $serie) { ?>
        <li><?php echo $serie; ?></li>
        <?php }?>
    </ul>
</body>
</html>