<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionar Sala para Edição</title>
</head>
<body>
<div class="w-screen h-screen bg-gradient-to-t from-gray-950 to-blue-600 flex flex-col items-center p-20 ">
    <h2>Selecionar Sala para Edição</h2>
    <form method="get" action="salaseditarselecionada/editar">
        <select name="sala_id">
            <?php foreach ($salas as $sala): ?>
                <option value="<?= $sala['sala_id'] ?>"><?= $sala['nome'] ?></option>
            <?php endforeach; ?>
        </select>
        <p><input type="submit" value="Editar Sala"></p>
    </form>
</div>
</body>
</html>
