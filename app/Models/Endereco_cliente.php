<?php namespace App\Models;

    use CodeIgniter\Model;

class Endereco_cliente extends Model{
    
    protected $table='endereco_cliente';
    protected $allowedFields =['id','estado','cidade','bairro','rua','numero'];
    
}