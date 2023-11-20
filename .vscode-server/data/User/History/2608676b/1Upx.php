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

    <!-- Adapte o formulário conforme necessário -->
    <?php if ($acao == 'Deletar'): ?>
        <form method="post" action="<?= base_url('salas/deletar/'.$sala['sala_id']) ?>">
            <input type="submit" value="Confirmar Exclusão">
        </form>
    <?php endif; ?>

</body>
</html>
