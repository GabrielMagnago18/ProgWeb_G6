<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?></title>
</head>
<body>

    <h2> <?php echo $titulo ?> </h2>
    <strong> <?php echo $msg ?> </strong>
    <form method="post">
        <p>Número do Bloco: <input type="number" name="bloco_id" /> </p>
        <p>Nome da sala: <input type="text" name="nome" /> </p>
        <p>Ano de construção: <input type="date" name="ano_construcao" /> </p>
        <p>Datashow: <input type="number" name="datashow" /> </p>
        <p>AC: <input type="number" name="ac" /> </p>
        <p>Cadeiras: <input type="number" name="cadeiras" /> </p>
        <p>Computadores: <input type="number" name="computadores" /> </p>
        <p><input type="submit" value="<?php echo $acao ?>"></p>
    </form>
    
</body>
</html>
