<?php 

namespace app\Models; 

use CodeIgniter\Model; 

class ClienteModel extends Model 
{
    protected $table = 'clientes'; 
    protected $primaryhey = 'id'; 
    protected $allowedFields = ['nombres', 'apellidos', 'cedula', 'telefono', 'email' ]; 
}