<?php namespace App\Models;

    use CodeIgniter\Model;

class Pedido extends Model{
    
    protected $table='pedido';
    protected $primaryKey = 'id';
    protected $allowedFields =['id','cliente_id','produto_id','empresa_id','quantidade','metodo_pagamento','status','nota_id'];
    
}