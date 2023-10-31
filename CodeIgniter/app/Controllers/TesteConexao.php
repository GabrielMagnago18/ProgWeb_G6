<?php
class TesteConexao extends CI_Controller {
    public function index() {
        $this->load->database(); // Carrega a biblioteca de banco de dados

        if ($this->db->conn_id) {
            echo 'Conexão bem-sucedida!';
        } else {
            echo 'Falha na conexão!';
        }
    }
}
