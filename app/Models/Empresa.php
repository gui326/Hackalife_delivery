<?php namespace App\Models;

    use CodeIgniter\Model;

class Empresa extends Model{
    
    protected $table='empresa';
    protected $primaryKey = 'cnpj';
    protected $allowedFields =['cnpj','nome_comercial','nome_fantasia','descricao','segmento','especializacao','email','login','senha','arquivo','telefone'];
    
}