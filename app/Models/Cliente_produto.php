<?php namespace App\Models;

    use CodeIgniter\Model;

class Cliente_produto extends Model{
    
    protected $table='cliente_produto';
    protected $primaryKey = 'id';
    protected $allowedFields =['id','cliente_id','produto_id','quantidade','valor_total'];
    
}