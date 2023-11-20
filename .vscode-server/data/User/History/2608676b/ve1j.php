<!-- salas_del.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
</head>
<body>

    <h1><?= $acao ?> Sala</h1>

    <p><?= $msg ?></p>


    <section class=" Deletar">
            <h1>Listagem de Salas</h1>

                <!-- Loop através das salas -->
                <?php foreach ($salas as $sala): ?>
        <p><?= $sala['nome'] ?> - 
            <?php if (isset($sala['sala_id'])): ?>
                <a href="<?= base_url('salas/deletar/'.$sala['sala_id']) ?>">Deletar</a>
            <?php else: ?>
                <span>ID não disponível</span>
            <?php endif; ?>
        </p>
    <?php endforeach; ?>

</body>
</html>
