<?php 
namespace App\Models;
use CodeIgniter\Model;
class ContainerModel extends Model
{
    protected $table = 'Gate_In';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['Container_no', 'Size', 'Type', 'Gate_In'];
}