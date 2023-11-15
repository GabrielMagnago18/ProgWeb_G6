<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Informações das Salas</title>
</head>
<body class="w-screen h-screen bg-gray-200 flex flex-col items-center p-20">
    <header>
        <nav class="bg-sky-900 p-4">
            <div class="container mx-auto flex justify-between items-center">
              <a class="text-white text-base font-bold" href="#">
                <button class="bg-sky-900 shadow-2xl rounded-md"><img src="Codeigniter/system/Images/Icons/round-menu.svg" alt="" width="300px"></button>
              </a>
              <a href="">
                <img class="p-2" src="Codeigniter/system/Images/Icons/univicosa.png" alt="" width="30%">
              </a>
              <ul class="flex space-x-4">
                <a class="text-white" href="#">
                  <button class="bg-sky-900 shadow-2xl rounded-md"><img src="Codeigniter/system/Images/Icons/setting-menu.svg" alt="" width="300px"></button>
                </a>
              </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="w-screen h-screen bg-gray-200 flex flex-col items-center p-20">            
            <h2 class="text-lg">Informações das Salas</h2>
                <!-- Botão para inserir sala -->
            <a href="http://arteemusica.mus.br/sistema/adsgrupo06/CodeIgniter/public/index.php/salas/inserir" target="_blank" class="text-white bg-sky-900 hover:bg-sky-700 font-medium rounded-md px-4 py-2 text-center items-center">
                Inserir Sala
            </a>

                <!-- Botão para editar sala selecionada -->
            <a href="http://arteemusica.mus.br/sistema/adsgrupo06/CodeIgniter/public/index.php/salaseditarselecionada" target="_blank" class="text-white bg-sky-900 hover:bg-sky-700 font-medium rounded-md px-4 py-2 text-center items-center">
                Editar Sala Selecionada
            </a>

            <div class="flex flex-col">
                <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="bg-white border-b">
                                    <tr>
                                        <th class="text-sm font-medium text-gray-900 px-4 py-2 text-left">Nome da Sala</th>
                                        <th class="text-sm font-medium text-gray-900 px-4 py-2 text-left">Bloco</th>
                                        <th class="text-sm font-medium text-gray-900 px-4 py-2 text-left">Ano de Construção</th>
                                        <th class="text-sm font-medium text-gray-900 px-4 py-2 text-left">Datashow</th>
                                        <th class="text-sm font-medium text-gray-900 px-4 py-2 text-left">AC</th>
                                        <th class="text-sm font-medium text-gray-900 px-4 py-2 text-left">Cadeiras</th>
                                        <th class="text-sm font-medium text-gray-900 px-4 py-2 text-left">Computadores</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($salas as $sala): ?>
                                        <tr class="bg-gray-100 border-b">
                                            <td class="text-sm text-gray-900 font-light px-4 py-2 whitespace-nowrap"><?= $sala['nome'] ?></td>
                                            <td class="text-sm text-gray-900 font-light px-4 py-2 whitespace-nowrap"><?= $sala['bloco_id'] ?></td>
                                            <td class="text-sm text-gray-900 font-light px-4 py-2 whitespace-nowrap"><?= $sala['ano_construcao'] ?></td>
                                            <td class="text-sm text-gray-900 font-light px-4 py-2 whitespace-nowrap"><?= $sala['Datashow'] ?></td>
                                            <td class="text-sm text-gray-900 font-light px-4 py-2 whitespace-nowrap"><?= $sala['AC'] ?></td>
                                            <td class="text-sm text-gray-900 font-light px-4 py-2 whitespace-nowrap"><?= $sala['Cadeiras'] ?></td>
                                            <td class="text-sm text-gray-900 font-light px-4 py-2 whitespace-nowrap"><?= $sala['Computadores'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <footer class="bg-sky-900 m-4">
        <div class="">
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
