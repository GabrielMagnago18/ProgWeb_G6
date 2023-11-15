<?php

namespace App\Models;

use CodeIgniter\Model
//use CodeIgniter\Model;

class Salamodel extends Model {
    protected $table = 'Salas';
    protected $primaryKey = 'sala_id';
    protected $allowedFields = ['bloco_id', 'nome', 'ano_construcao', 'Datashow', 'AC', 'Cadeiras', 'Computadores'];
    protected $returnType = 'array';
}

