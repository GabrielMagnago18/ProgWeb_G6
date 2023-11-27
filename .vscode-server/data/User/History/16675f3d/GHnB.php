<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações da Sala</title>
    <!-- Inclua o qrcode.js via CDN -->
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <!-- Tailwind  -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

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
                <a class="flex items-center">
                    <img src="https://cdn.univicosa.com.br/files/portal/logo/horizontal_lite_svg.svg" class="mr-3 h-6 sm:h-9" alt="Uni logo" />
                </a>
                <a href="http://arteemusica.mus.br/sistema/adsgrupo06/CodeIgniter/public/index.php/salas/exibir">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAu0lEQVRIS2NkoDFgpLH5DCPEgv///wsAg9KBkZFxA6lBSjCIoIbPBxocAMSBpFqC1wI0wy9ALXhAii9wWkANw0EOwWoBtQzHagE1DcewgNqGo1iAZjgp8YihFpjS4EEPZ0At2A9UbUCR6aCIxWYByFA0S0DJ0hGo9gMlFmKkImpbgi+ZwoKLIp8QymgUW0JMUUGRJcQWdjBLCoGRPoGUSCdoAVLqSiDVcJxlESkuJKSWKB8QMgSf/NC3AADnf1YZ7SM9iwAAAABJRU5ErkJggg=="/>
                </a>


        </nav>
    </header>
        <main  class="w-screen h-screen bg-gray-200 flex flex-col items-center p-24">
            
            <div class="h-auto bg-white flex flex-col items-center p-20  rounded-md">
            <div class="bg-white px-4 rounded-md">
                <h2 class="text-lg font-bold py-4">Informações das Salas</h2>
            </div>

            <p>ID da Sala: <?= $sala['sala_id'] ?></p>
            <p>Nome da Sala: <?= $sala['nome'] ?></p>
            <p>Número do Bloco: <?= $sala['bloco_id'] ?></p>
            <p>Datashow: <?= $sala['Datashow'] ?></p>
            <p>AC: <?= $sala['AC'] ?></p>
            <p>Cadeiras: <?= $sala['Cadeiras'] ?></p>

            <!-- Div onde o QR code será exibido -->
            
            
            <div id="qrcode"></div>
            </div>
        </main>
    <!-- Script para gerar o QR code -->
    <script>
        // Obtém a URL atual
        var url = window.location.href;

        // Configuração do qrcode
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            text: url,
            width: 128,
            height: 128
        });
    </script>
</body>
</html>
