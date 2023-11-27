<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações da Sala</title>
    <!-- Inclua o qrcode.js via CDN -->
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
</head>
<body>
    <h2>Informações da Sala</h2>

    <p>ID da Sala: <?= $sala['sala_id'] ?></p>
    <p>Nome da Sala: <?= $sala['nome'] ?></p>
    <p>Número do Bloco: <?= $sala['bloco_id'] ?></p>
    <p>Datashow: <?= $sala['Datashow'] ?></p>
    <p>AC: <?= $sala['AC'] ?></p>
    <p>Cadeiras: <?= $sala['Cadeiras'] ?></p>

    <!-- Div onde o QR code será exibido -->
    <div id="qrcode"></div>

    <!-- Script para gerar o QR code -->
    <script>
        // Dados que você deseja incluir no QR code (pode ser dinâmico, dependendo do seu caso)
        var dados = "ID da Sala: <?= $sala['sala_id'] ?>\nNome da Sala: <?= $sala['nome'] ?>\nNúmero do Bloco: <?= $sala['bloco_id'] ?>";

        // Configuração do qrcode
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            text: dados,
            width: 128,
            height: 128
        });
    </script>
</body>
</html>
