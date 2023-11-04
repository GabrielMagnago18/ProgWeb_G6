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
}
