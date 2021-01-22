<?php namespace App\Models;

    use CodeIgniter\Model;

class Preferencia extends Model{
    
    protected $table='preferencia';
    protected $primaryKey = 'id';
    protected $allowedFields =['id','gosto_1','gosto_2'];
    
}