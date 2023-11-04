<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Sala</title>
</head>
<body>
    <h2>Editar Sala</h2>

    <form method="post" action="salaseditarselecionada/salvar/<?= $sala['sala_id'] ?>">



        <p>ID da Sala: <?= $sala['sala_id'] ?></p>
        <p>Nome da Sala: <input type="text" name="nome" value="<?= $sala['nome'] ?>"></p>
        <p>Número do Bloco: <input type="text" name="bloco_id" value="<?= $sala['bloco_id'] ?>"></p>
        <p>Ano de Construção: <input type="date" name="ano_construcao" value="<?= $sala['ano_construcao'] ?>"></p>
        <p>Datashow: <input type="number" name="Datashow" value="<?= $sala['Datashow'] ?>"></p>
        <p>AC: <input type="number" name="AC" value="<?= $sala['AC'] ?>"></p>
        <p>Cadeiras: <input type="number" name="Cadeiras" value="<?= $sala['Cadeiras'] ?>"></p>
        <p>Computadores: <input type="number" name="Computadores" value="<?= $sala['Computadores'] ?>"></p>
        <p><input type="submit" value="Salvar Alterações"></p>
    </form>
</body>
</html>
