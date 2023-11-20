<?php


class QrCodeController extends CI_Controller
{
    public function index()
    {
        if ($this->input->get()) {
            $this->load->view('lab/qrcode');
        } else {
            $this->output
                ->set_content_type('text/html')
                ->set_output("<h1 style='text-align: center'>Erro de parametros!</h1>");
        }
    }
}