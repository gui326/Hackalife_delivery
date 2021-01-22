<?php namespace App\Models;

    use CodeIgniter\Model;

class Produto extends Model{
    
    protected $table='produto';
    protected $primaryKey = 'id';
    protected $allowedFields =['id','empresa_id','nome','arquivo','descricao','valor','quantidade_comprada','segmento'];
    
}