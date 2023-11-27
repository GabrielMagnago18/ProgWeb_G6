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

    <form method="post" action="/salaseditarselecionada/salvar/<?= $sala['sala_id'] ?>">
        <p>ID da Sala: <?= $sala['sala_id'] ?></p>
        <p>Nome da Sala: <input type="text" name="nome" value="<?= $sala['nome'] ?>"></p>
        <p>Número do Bloco: <input type="text" name="bloco_id" value="<?= $sala['bloco_id'] ?>"></p>
        <p>Datashow: <input type="number" name="Datashow" value="<?= $sala['Datashow'] ?>"></p>
        <p>AC: <input type="number" name="AC" value="<?= $sala['AC'] ?>"></p>
        <p>Cadeiras: <input type="number" name="Cadeiras" value="<?= $sala['Cadeiras'] ?>"></p>
        <p><input type="submit" value="Salvar Alterações"></p>
    </form>

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
