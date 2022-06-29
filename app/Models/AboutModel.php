<?php
namespace App\Models;
use CodeIgniter\Model;
class AboutModel extends Model
{
    protected $table        ='data_diri'; //nama tabel di database
    protected $primaryKey   ='nama'; //field yang akan dijadikan PK

    protected $useAutoIncrement = true; //dibuat auto increment datanya
    protected $returnType ="object"; //nilai luarannya diformat ke object
    //field yang diijinkan untuk diakses yang ada di tabel database.
    protected $allowedFields = ['nama', 'nim', 'jurusan', 'matakuliah'];
}

