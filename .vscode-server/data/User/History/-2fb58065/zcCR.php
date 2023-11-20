<!-- app/Views/sala_editar.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Sala</title>
</head>
<body>
    <h1>Editar Sala</h1>
    <?= form_open('sala/atualizar') ?>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?= esc($sala['nome']) ?>" required>

        <!-- Adicione os outros campos do seu modelo aqui -->

        <input type="hidden" name="sala_id" value="<?= esc($sala['sala_id']) ?>">

        <button type="submit">Atualizar</button>
    <?= form_close() ?>
</body>
</html>
