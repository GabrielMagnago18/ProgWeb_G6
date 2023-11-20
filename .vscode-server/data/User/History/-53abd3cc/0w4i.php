<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Informações das Salas</title>
</head>

<style>
    body{
        height: 100%;
        width: 100%;
    }

    @media (max-width: 639px){
        table{
        display: inline-table;
        width: 50%;
        }

        th, td {
        white-space: normal; /* Evita que o texto seja quebrado */
    }
        td:before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
    }
    }

    #header{
        width: 100%;
    }
</style>

<body class="bg-gray-200">
    <header class="bg-sky-900">
        <nav class="px-4 py-2.5 dark:bg-sky-900" id="header">
            <div class="flex flex-wrap justify-between items-center">
                <a href="#" class="flex items-center">
                    <img src="https://cdn.univicosa.com.br/files/portal/logo/horizontal_lite_svg.svg" class="mr-3 h-6 sm:h-9" alt="Uni logo" />
                </a>

        </nav>
    </header>
    <main class="flex flex-col items-center">
        <div class="w-screen h-screen bg-gray-200 flex flex-col items-center p-20">
            <div class="bg-white px-4 rounded-md">
            <h2 class="text-lg py-4">Informações das Salas</h2>
            </div>          

            <div class="py-6">
            <!-- Botão para inserir sala -->
            <a href="http://arteemusica.mus.br/sistema/adsgrupo06/CodeIgniter/public/index.php/salas/inserir" target="_blank" class="text-white bg-sky-900 hover:bg-sky-700 font-medium rounded-md px-4 py-2 text-center items-center">
                Inserir Sala
            </a>
            </div>

            <div class="py-6">
            <!-- Botão para editar sala selecionada -->
            <a href="http://arteemusica.mus.br/sistema/adsgrupo06/CodeIgniter/public/index.php/salaseditarselecionada" target="_blank" class="text-white bg-sky-900 hover:bg-sky-700 font-medium rounded-md px-4 py-2 text-center items-center">
                Editar Sala Selecionada
            </a>
            </div>

            <div class="flex flex-col overflow-x-auto">
                <table class="w-full overflow-x-auto">
                    <thead class="bg-white border-b">
                        <tr>
                            <th class="text-sm font-medium text-gray-900 p-2 text-left">Nome da Sala</th>
                            <th class="text-sm font-medium text-gray-900 p-2 text-left">Bloco</th>
                            <th class="text-sm font-medium text-gray-900 p-2 text-left">Ano de Construção</th>
                            <th class="text-sm font-medium text-gray-900 p-2 text-left">Datashow</th>
                            <th class="text-sm font-medium text-gray-900 p-2 text-left">AC</th>
                            <th class="text-sm font-medium text-gray-900 p-2 text-left">Cadeiras</th>
                            <th class="text-sm font-medium text-gray-900 p-2 text-left">Computadores</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($salas as $sala): ?>
                            <tr class="bg-gray-100 border-b">
                                <td class="text-sm text-gray-900 font-light p-2 whitespace-nowrap"><?= $sala['nome'] ?></td>
                                <td class="text-sm text-gray-900 font-light p-2 whitespace-nowrap"><?= $sala['bloco_id'] ?></td>
                                <td class="text-sm text-gray-900 font-light p-2 whitespace-nowrap"><?= $sala['ano_construcao'] ?></td>
                                <td class="text-sm text-gray-900 font-light p-2 whitespace-nowrap"><?= $sala['Datashow'] ?></td>
                                <td class="text-sm text-gray-900 font-light p-2 whitespace-nowrap"><?= $sala['AC'] ?></td>
                                <td class="text-sm text-gray-900 font-light p-2 whitespace-nowrap"><?= $sala['Cadeiras'] ?></td>
                                <td class="text-sm text-gray-900 font-light p-2 whitespace-nowrap"><?= $sala['Computadores'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer class="w-full text-center pin-b bg-sky-900">
        <div class="flex flex-row justify-between p-6">
            <div class="text-white">
                <h2>Feito pelo grupo 06:</h2>
                <p>Vinicius Fontes Ferreira</p>
                <p>Maria Eduarda Rosa</p>
                <p>Gabriel Batista Magnago</p>
            </div>
            <div class="text-white">
                <p>Programação Web II</p>
                <p>ADS107</p>
            </div>
        </div>
    </footer>
</body>
</html>