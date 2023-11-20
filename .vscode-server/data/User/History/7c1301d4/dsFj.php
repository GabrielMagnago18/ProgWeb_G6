<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <h1><?php echo $titulo; ?></h1>

    <?php if (!empty($msg)): ?>
        <p><?php echo $msg; ?></p>
    <?php endif; ?>

    <form method="post" action="<?php echo base_url('atualizar-sala/atualizar'); ?>">
        <!-- Adicione um campo oculto para armazenar o ID da sala -->
        <input type="hidden" name="id_sala" value="<?php echo $id_sala; ?>">

        <p>Letra do Bloco: <input type="text" name="bloco_id" value="<?php echo $bloco_id; ?>" /></p>
        <p>Nome da sala: <input type="text" name="nome" value="<?php echo $nome; ?>" /></p>
        <p>Datashow: <input type="number" name="datashow" value="<?php echo $datashow; ?>" /></p>
        <p>AC: <input type="number" name="ac" value="<?php echo $ac; ?>" /></p>
        <p>Cadeiras: <input type="number" name="cadeiras" value="<?php echo $cadeiras; ?>" /></p>
        <p>Computadores: <input type="number" name="computadores" value="<?php echo $computadores; ?>" /></p>
        <p><input type="submit" value="<?php echo $acao; ?>"></p>
    </form>
</body>
</html>
