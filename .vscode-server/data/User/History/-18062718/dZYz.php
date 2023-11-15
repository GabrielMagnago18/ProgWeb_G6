<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Informações das Salas</title>
</head>
<body>
<header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="#" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a>
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get started</a>
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-white rounded bg-blue-700 lg:bg-transparent lg:text-blue-700 lg:p-0 dark:text-white" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Company</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Marketplace</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Features</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>


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
    <footer class="bg-sky-900 m-4 w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
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
