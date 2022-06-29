<?php
namespace App\Controllers;

use App\models\homeModel; //Menggunakan file model yang bernama ProductModel
use CodeIgniter\Exceptions\PageNotFoundException; //Menggunakan error handling

class Dien extends BaseController // class product merupakan varian dari BaseController
{
    protected $product;
    function __construct()
    {
        $this->Dien = new homeModel();
    }

    public function index() //membuat fungsi index dengan sifat public
    {
        //membuat object model $product
        $home = new homeModel();

        /*
        menyiapkan data untuk dikirim ke view dengan nama $productx
        dengan ketentuan yang mempunyai status published pada data yang ada di database
        */
//    $data['productx'] = $product->where('status', 'published')->findAll();
        $data['homex'] = $home->findAll();
        //mengirim data ke view
        echo view('home', $data);
    }
    
}


