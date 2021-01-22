<?php namespace App\Models;

    use CodeIgniter\Model;

class Cliente extends Model{
    
    protected $table='cliente';
    protected $primaryKey = 'cpf';
    protected $allowedFields =['cpf','nome','telefone','data','email','login','senha','preferencia_id'];
    
}