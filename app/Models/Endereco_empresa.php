<?php namespace App\Models;

    use CodeIgniter\Model;

class Endereco_empresa extends Model{
    
    protected $table='endereco_empresa';
    protected $allowedFields =['id','estado','cidade','bairro','rua','numero'];
    
}