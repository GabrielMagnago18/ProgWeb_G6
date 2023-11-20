<?php namespace App\Controllers;

class SalasEditarSelecionada extends BaseController 
{
    public function editar()
    {
        $sala_id = $this->request->getGet('sala_id');

        if (!$sala_id) {
            echo 'ID da sala não especificado.';
            return;
        }

        $salaModel = new \App\Models\SalaModel();
        $sala = $salaModel->find($sala_id);

        if (!$sala) {
            echo 'Sala não encontrada.';
            return;
        }

        echo view('salas_editar_selecionada', ['sala' => $sala]);
    }

    public function salvar($sala_id)
    {
        // Obtém os dados do formulário que deseja salvar
        $data = [
            'nome' => $this->request->getPost('nome'),
            'bloco_id' => $this->request->getPost('bloco_id'),
            'Datashow' => $this->request->getPost('Datashow'),
            'AC' => $this->request->getPost('AC'),
            'Cadeiras' => $this->request->getPost('Cadeiras'),
            'Computadores' => $this->request->getPost('Computadores')
        ];

        $salaModel = new \App\Models\SalaModel();

        // Atualize os dados no banco de dados
        if ($salaModel->update($sala_id, $data)) {
            // Sucesso: os dados foram atualizados
            return redirect()->to(base_url('salaseditarselecionada/editar?sala_id=' . $sala_id));
        } else {
            // Falha: os dados não puderam ser atualizados
            return redirect()->back()->with('error', 'Erro ao salvar as alterações.');
        }
    }
}
