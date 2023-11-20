<?php namespace App\Controllers;

class Salas extends BaseController 
{
    public function index()
    {
        $salaModel = new \App\Models\SalaModel();
        $data['salas'] = $salaModel->select('sala_id, nome, bloco_id, datashow, ac, cadeiras, computadores')->findAll();
    
        echo view('salas_form', $data);
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
            $datashow = $this->request->getPost('datashow');
            $ac = $this->request->getPost('ac');
            $cadeiras = $this->request->getPost('cadeiras');
            $computadores = $this->request->getPost('computadores');

            // Valide os dados antes de inserir no banco de dados
            if (!empty($nome) && !empty($bloco_id) ) {
                $salaModel->set('Nome', $nome);
                $salaModel->set('bloco_id', $bloco_id);
                $salaModel->set('nome', $nome);
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
    public function deletar($id)
    {
        $data['titulo'] = 'Deletar sala';
        $data['acao'] = 'Deletar';
        $data['msg'] = ''; // Inicializa a variável $msg

        $salaModel = new \App\Models\SalaModel();

        // Verifique se o ID é válido
        if (!empty($id) && is_numeric($id)) {
            // Verifique se a sala existe antes de excluir
            $sala = $salaModel->find($id);

            if ($sala) {
                // Excluir a sala do banco de dados
                if ($salaModel->delete($id)) {
                     // Exclusão bem-sucedida, redirecione para a página desejada
        return redirect()->to('http://www.arteemusica.mus.br/sistema/adsgrupo06/grupo');
                } else {
                    $data['msg'] = 'Erro ao excluir sala';
                }
            } else {
                $data['msg'] = 'Sala não encontrada';
                 return view('salas_del', $data);
            }
        } else {
            $data['msg'] = 'ID inválido';
        }

        echo view('salas_del', $data);
    }

}
