<?php

namespace App\Controllers;

use App\Services\SalaService;

class AtualizarSala extends BaseController
{
    public function index()
    {
        // Lógica para exibir o formulário de atualização, se necessário
    }

    public function atualizar()
    {
        $data['titulo'] = 'Atualizar sala';
        $data['acao'] = 'Atualizar';
        $data['msg'] = '';

        $salaService = new SalaService();

        if ($this->request->getMethod() === 'post') {
            $postData = $this->request->getPost();

            // Chama o método da classe SalaService para atualização
            $data['msg'] = $salaService->atualizar($postData);
        }

        echo view('atualizar_sala_form', $data); // Substitua pelo nome correto do arquivo de visualização
    }
}
