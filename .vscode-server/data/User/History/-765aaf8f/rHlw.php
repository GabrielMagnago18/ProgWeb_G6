<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QrCodeController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Carregue a biblioteca
        $this->load->library('qrlib');
        // Carregue os modelos, se aplicável
        $this->load->model('ModeloSala'); // Certifique-se de substituir pelo nome real do seu modelo
    }

    public function gerarQRCodes() {
        // Restante do código para gerar os QR Codes
    }

    public function exibirSala($sala_id) {
        // Restante do código para exibir as informações da sala
    }
}
