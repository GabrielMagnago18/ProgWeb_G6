<?php namespace App\Controllers;

class Salas extends BaseController 
{
    public function index()
    {
        


    }
    public function inserir()
    {
        $data['titulo'] = 'inserir nova sala';
        $data['acao'] = 'inserir';

        // variavel para usar no insert
        $data['msn']= "";

        if ($this->request->getMethod() === 'post') {
            $salaModel = new \App\Models\SalaModel(); // Trocando para SalaModel
            $salaModel->set('Nome', $this->request->getPost('Nome'));
            $salaModel->set('bloco_id', $this->request->getPost('bloco_id'));
            $salaModel->set('nome', $this->request->getPost('nome'));
            $salaModel->set('ano_construcao', $this->request->getPost('ano_construcao'));
            $salaModel->set('Datashow', $this->request->getPost('Datashow'));
            $salaModel->set('AC', $this->request->getPost('AC'));
            $salaModel->set('Cadeiras', $this->request->getPost('Cadeiras'));
            $salaModel->set('Computadores', $this->request->getPost('Computadores'));
        
            if ($salaModel->insert()) {
                // deu certo
                $data['msg'] = 'Dados inseridos com sucesso';
            } else {
                // deu errado
                $data['msg'] = 'Erro ao inserir dados';
            }
        }
        
        echo View('sala_form', $data); // Trocando para sala_form se necessário
        
    }
}
