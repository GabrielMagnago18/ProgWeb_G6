<?php namespace App\Models;

use CodeIgniter\Model; // Pq Code está branco?
class Sala_model extends Model {
    protected $table = 'Salas';
    protected $primaryKey = 'sala_id'; // armazena o nome da chave primária
    protected $allowedFields = ['sala_id', 'bloco_id' , 'nome' , 'ano_construcao' , 'Datashow' , 'AC' , 'Cadeiras','Computadores']; // quais campos serão permitidos manipulação dentro da tabela, se tiver mais é só listar no array
    protected $returnType = 'array';

}
