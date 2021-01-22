<?php namespace App\Models;

    use CodeIgniter\Model;

class Nota extends Model{
    
    protected $table='nota';
    protected $primaryKey = 'id';
    protected $allowedFields =['id','total'];
    
}