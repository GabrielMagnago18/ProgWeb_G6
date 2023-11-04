<?php namespace App\Controllers;

class Salas extends BaseController 
{
    public function index()
    {
        // Se necessário, adicione lógica para a página inicial
    }

    public function inserir()
    {
        $data['titulo'] = 'Inserir nova sala';
        $data['acao'] = 'Inserir';
        $data['msg'] = ''; // Inicializa a variável $msg

        if ($this->request->getMethod() === 'post') {
            $salaModel = new \App\Models\SalaModel();
            
            $nome = $this->request->getPost('nome');
            $bloco_id = $this->request->getPost('bloco_id');
            $ano_construcao = $this->request->getPost('ano_construcao');
            $datashow = $this->request->getPost('datashow');
            $ac = $this->request->getPost('ac');
            $cadeiras = $this->request->getPost('cadeiras');
            $computadores = $this->request->getPost('computadores');

            // Valide os dados antes de inserir no banco de dados
            if (!empty($nome) && !empty($bloco_id) && !empty($ano_construcao)) {
                $salaModel->set('Nome', $nome);
                $salaModel->set('bloco_id', $bloco_id);
                $salaModel->set('nome', $nome);
                $salaModel->set('ano_construcao', $ano_construcao);
                $salaModel->set('Datashow', $datashow);
                $salaModel->set('AC', $ac);
                $salaModel->set('Cadeiras', $cadeiras);
                $salaModel->set('Computadores', $computadores);

                if ($salaModel->insert()) {
                    // deu certo
                    $data['msg'] = 'Dados inseridos com sucesso';
                } else {
                    // deu errado
                    $data['msg'] = 'Erro ao inserir dados';
                }
            } else {
                $data['msg'] = 'Campos obrigatórios não preenchidos';
            }
        }
        
        echo view('salas_form', $data);
    }
}
