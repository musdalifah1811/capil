<?php
namespace App\Models;
use CodeIgniter\Model;
class homeModel extends Model
{
    protected $table        ='pesan'; 
    protected $primaryKey   ='id'; 
    protected $returnType   = "object";
	protected $useAutoIncrement     = true;
    protected $allowedFields = ['Nama', 'Email', 'Subject', 'Massage', 'status'];
}

