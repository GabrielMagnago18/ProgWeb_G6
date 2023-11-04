<?php namespace App\Controllers;

class SalasEditar extends BaseController 
{
    public function index()
    {
        $salaModel = new \App\Models\SalaModel();
        $data['salas'] = $salaModel->findAll();

        echo view('salas_editar_selecao', $data);
    }
}
