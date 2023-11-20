<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QrCodeController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('qrlib');
        // Carregue os modelos necessários, se aplicável
        $this->load->model('ModeloSala');
    }

    public function gerarQRCodes() {
        // Restante do código para gerar os QR Codes
    }

    public function exibirSala($sala_id) {
        // Restante do código para exibir as informações da sala
    }
}
