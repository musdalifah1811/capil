<?php
namespace App\Models;
use CodeIgniter\Model;
class UmumModel extends Model
{
    protected $table        ='tb_umum'; //nama tabel di database
    protected $primaryKey   ='id_barang'; //field yang akan dijadikan PK

    protected $useAutoIncrement = true; //dibuat auto increment datanya
    protected $returnType ="object"; //nilai luarannya diformat ke object
    //field yang diijinkan untuk diakses yang ada di tabel database.
    protected $allowedFields = ['id_barang', 'nama_barang', 'harga', 'stok', 'status'];
}
