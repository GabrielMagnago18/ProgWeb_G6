<?php

namespace App\Services;

use App\Models\SalaModel;

class SalaService
{
    protected $salaModel;

    public function __construct()
    {
        $this->salaModel = new SalaModel();
    }

    public function atualizar($data)
    {
        $id_sala = $data['id_sala'];

        $nome = $data['nome'];
        $bloco_id = $data['bloco_id'];
        $datashow = $data['datashow'];
        $ac = $data['ac'];
        $cadeiras = $data['cadeiras'];
        $computadores = $data['computadores'];

        // Valide os dados antes de atualizar no banco de dados
        if (!empty($id_sala) && !empty($nome) && !empty($bloco_id)) {
            $dataToUpdate = [
                'Nome' => $nome,
                'bloco_id' => $bloco_id,
                'nome' => $nome,
                'Datashow' => $datashow,
                'AC' => $ac,
                'Cadeiras' => $cadeiras,
                'Computadores' => $computadores,
            ];

            // Atualiza os dados
            if ($this->salaModel->update($id_sala, $dataToUpdate)) {
                return 'Dados atualizados com sucesso';
            } else {
                return 'Erro ao atualizar dados';
            }
        } else {
            return 'Campos obrigatórios não preenchidos';
        }
    }
}
