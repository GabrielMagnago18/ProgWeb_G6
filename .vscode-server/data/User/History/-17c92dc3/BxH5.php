<?php namespace App\Controllers;

class Salas extends BaseController 
{
    public function index()
    {
        


    }
    public function inserir()
    {
        $data['titulo'] = 'inserir nova sala';
        $data['acao'] = 'inserir';

        // variavel para usar no insert
        $data['msn']= "";

        if ($this->request->getMethod()==='')

        // passar data como parametro

        echo View('salas_form',$data);
    }
}
