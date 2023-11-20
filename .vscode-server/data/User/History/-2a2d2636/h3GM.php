<?php namespace App\Controllers;

use App\Models\Salamodel;

class Sala extends BaseController {
    public function editar($sala_id) {
        $salaModel = new Salamodel();
        $data['sala'] = $salaModel->find($sala_id);

        return view('sala_editar', $data);
    }
// No seu controlador (Controllers/Sala.php)
    public function listar() {
    $salaModel = new Salamodel();
    $data['salas'] = $salaModel->findAll();

    return view('sala_listar', $data);
}

    public function atualizar() {
        $salaModel = new Salamodel();

        // Obtenha os dados do formulário
        $data = [
            'nome' => $this->request->getPost('nome'),
            // Adicione os outros campos do seu modelo aqui
        ];

        // Atualize os dados no banco de dados
        $salaModel->update($this->request->getPost('sala_id'), $data);

        // Redirecione para a página de listagem ou qualquer outra página desejada
        return redirect()->to('/sua-rota-de-listagem');
    }
}
