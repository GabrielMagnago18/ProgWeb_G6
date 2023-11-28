<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Selecionar Sala para Edição</title>
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
    <header class="bg-sky-900">
        <nav class="px-4 py-2.5 dark:bg-sky-900" id="header">
            <div class="flex flex-wrap justify-between items-center">
                <a href="#" class="flex items-center">
                    <img src="https://cdn.univicosa.com.br/files/portal/logo/horizontal_lite_svg.svg" class="mr-3 h-6 sm:h-9" alt="Uni logo" />
                </a>

        </nav>
    </header>
    <main class="w-screen h-screen bg-gray-200 flex flex-col items-center p-24">
        <div class="h-auto bg-white flex flex-col items-center p-20  rounded-md">
            <h2 class="text-md font-bold p-4">Selecionar Sala para Visualizar</h2>
            <form method="get" action="salaseditarselecionada/editar">
                <div class="p-6">
                    <select class="rounded-md border-2 hover:border-sky-900" name="sala_id">
                        <?php foreach ($salas as $sala): ?>
                            <option value="<?= $sala['sala_id'] ?>"><?= $sala['nome'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <p class="bg-sky-900 text-white p-2 rounded-md hover:bg-sky-700"><input type="submit" value="Ver"></p>
                </div>
            </form>
        </div>
    </main>
</body>
</html>