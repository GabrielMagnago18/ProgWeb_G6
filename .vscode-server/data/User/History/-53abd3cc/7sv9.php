<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações das Salas</title>
</head>
<body>
    <div class="w-screen h-screen bg-gradient-to-t from-gray-950 to-blue-600 flex flex-col items-center p-20 ">
        
        <h2>Informações das Salas</h2>
        <table>
            <tr>
                <th>Nome da Sala</th>
                <th>Bloco</th>
                <th>Ano de Construção</th>
                <th>Datashow</th>
                <th>AC</th>
                <th>Cadeiras</th>
                <th>Computadores</th>
            </tr>
            <?php foreach ($salas as $sala): ?>
                <tr>
                    <td><?= $sala['nome'] ?></td>
                    <td><?= $sala['bloco_id'] ?></td>
                    <td><?= $sala['ano_construcao'] ?></td>
                    <td><?= $sala['Datashow'] ?></td>
                    <td><?= $sala['AC'] ?></td>
                    <td><?= $sala['Cadeiras'] ?></td>
                    <td><?= $sala['Computadores'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
