<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class QrCodeController  extends BaseController {

    public function __construct() {
        parent::__construct();
        // Carregue a biblioteca
        $this->load->library('qrlib');
        // Carregue os modelos, se aplicável
        $this->load->model('ModeloSala'); // Certifique-se de substituir pelo nome real do seu modelo
    }

    public function index() {
        // Seu código para a página inicial
    }

    public function outraFuncao() {
        // Código para outra função do controlador
    }
}
