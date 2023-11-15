<?php namespace App\Controllers;

class SalasExibir extends BaseController 
{
    public function index()
    {
        $salaModel = new \App\Models\SalaModel();
        $data['salas'] = $salaModel->findAll(); // Busca todas as salas

        echo view('salas_exibir', $data);
    }
}
