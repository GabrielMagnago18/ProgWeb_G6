<?php namespace App\Models;

use CodeIgniter\Model; // Pq Code está branco?
class Sala_model extends Model {
    protected $table = 'Salas';
    protected $primaryKey = 'sala_id'; // armazena o nome da chave primária
    protected $allowedFields = ['sala_id', 'bloco_id' , 'nome' , 'ano_construcao' , 'Datashow' , 'AC' , 'Cadeiras','Computadores']; // quais campos serão permitidos manipulação dentro da tabela, se tiver mais é só listar no array
    protected $returnType = 'array';

}

// criar agora o Controller para chamar uma view com todos os dados

/*-------------------------------------------------
----- Perguntar sobre esses dados -----------------


class Sala_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function get_salas() {
        // Recupera todas as salas da tabela
        $query = $this->db->get('sala');
        return $query->result();
    }

    public function get_sala_by_id($sala_id) {
        // Busca uma sala específica pelo ID
        $query = $this->db->get_where('sala', array('Sala' => $sala_id));
        return $query->row();
    }

    public function insert_sala($data) {
        // Insere uma nova sala na tabela
        $this->db->insert('sala', $data);
        return $this->db->insert_id(); // Retorna o ID da sala recém-inserida
    }

    public function update_sala($sala_id, $data) {
        // Atualiza os dados de uma sala
        $this->db->where('Sala', $sala_id);
        $this->db->update('sala', $data);
    }

    public function delete_sala($sala_id) {
        // Exclui uma sala com base no ID
        $this->db->delete('sala', array('Sala' => $sala_id));
    }
}
*/
