<?php

use App\Controllers\BaseController;

defined('BASEPATH') OR exit('No direct script access allowed');

class QrCodeController extends BaseController {

    public function __construct() {
        parent::__construct();
        // Carregue a biblioteca
        $this->load->library('qrlib');

        // Carregue os modelos, se aplicável
        $this->load->model('SalaModel'); // Certifique-se de substituir pelo nome real do seu modelo
    }

    public function gerarQRCodes() {
        // Restante do código para gerar os QR Codes
    }

    public function exibirSala($sala_id) {
        // Restante do código para exibir as informações da sala
    }
}
