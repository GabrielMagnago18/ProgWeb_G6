<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title><?php echo $titulo ?></title>
</head>

<style>
    body{
        height: 100%;
        width: 100%;
    }

    #header{
        width: 100%;
    }
</style>

<body>
    <header>
        <nav class="px-4 py-2.5 dark:bg-sky-900" id="header">
            <div class="flex flex-wrap justify-between items-center">
                <a href="#" class="flex items-center">
                    <img src="https://cdn.univicosa.com.br/files/portal/logo/horizontal_lite_svg.svg" class="mr-3 h-6 sm:h-9" alt="Uni logo" />
                </a>
        </nav>
    </header>
    <main class="w-screen h-screen bg-gray-200 flex flex-col items-center p-24">
        <div class="bg-sky-900 flex flex-col items-center rounded-md py-3 px-10">
        <h2 class="text-white"> <?php echo $titulo ?> </h2>
        </div>

        <div class="h-auto bg-white flex flex-col items-center p-12 rounded-md">
            <strong> <?php echo $msg ?> </strong>
            <form class="p-6" method="post">
                <p>Número do Bloco: <input type="number" name="bloco_id" /> </p>
                <p>Nome da sala: <input type="text" name="nome" /> </p>
                <p>Ano de construção: <input type="date" name="ano_construcao" /> </p>
                <p>Datashow: <input type="number" name="datashow" /> </p>
                <p>AC: <input type="number" name="ac" /> </p>
                <p>Cadeiras: <input type="number" name="cadeiras" /> </p>
                <p>Computadores: <input type="number" name="computadores" /> </p>
                <p><input type="submit" value="<?php echo $acao ?>"></p>
            </form>
        </div>
    </main>
</body>
</html>
