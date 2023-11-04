<?php namespace App\Controllers;

class SalasEditarSelecionada extends BaseController 
{
    public function editar()
    {
        $sala_id = $this->request->getGet('sala_id');
        
        // Verifique se o ID da sala foi fornecido na consulta
        if (!$sala_id) {
            echo 'ID da sala não especificado.';
            return;
        }

        $salaModel = new \App\Models\SalaModel();
        $sala = $salaModel->find($sala_id);

        // Verifique se a sala com o ID especificado existe
        if (!$sala) {
            echo 'Sala não encontrada.';
            return;
        }

        // Exiba o formulário de edição com os dados da sala
        echo view('salas_editar_selecionada', $sala);
    }
}
