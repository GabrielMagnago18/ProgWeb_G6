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
<p>Nome da Pessoa: <input type="text" name="Nome" /> </p>
<p><input type="submit" value="<?php echo $acao ?>"></p>
    
</body>
</html>