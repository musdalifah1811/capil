<?php
namespace App\Controllers;

use App\models\umumModel; //Menggunakan file model yang bernama umumModel
use CodeIgniter\Exceptions\PageNotFoundException; //Menggunakan error handling

class umum extends BaseController // class umum merupakan varian dari BaseController
{
    protected $umum;
    function __construct()
    {
        $this->umum = new umumModel();
    }

    public function index() //membuat fungsi index dengan sifat public
    {
        //membuat object model $umum
        $umum = new umumModel();

        /*
        menyiapkan data untuk dikirim ke view dengan nama $umumx
        dengan ketentuan yang mempunyai status published pada data yang ada di database
        */
//    $data['umumx'] = $umum->where('status', 'published')->findAll();
        $data['umumx'] = $umum->findAll();
        //mengirim data ke view
        echo view('umum', $data);
    }
    
    public function add() //membuat fungsi add dengan sifat public
    {
      $umum = new umumModel();
	    $data['umumx'] = $umum->findAll();
        return view('umum-add', $data);
    }

    public function save() //membuat fungsi save dengan sifat public
    {
        if (!$this->validate([
            'id_barang' => [
                'rules' => 'required|is_unique[tb_umum.id_barang]',
                'errors' => [
                    'required' => 'ID Barang harus diisi!',
	        		'is_unique' => 'sudah ada {field} yang sama'
                ]
            ],
            'nama_barang' => [
                'rules' => 'required',
                'errors' => [
                   'required' => 'Nama Barang harus diisi!'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!'
                ]
            ],
            'stok' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!'
                ]
            ],
    ])) {
        session()->setFlashdata('error', $this->validator->listErrors());
        return redirect()->back()->withInput();
    }

    $this->umum->insert([
        'id_barang' => $this->request->getVar('id_barang'),
        'nama_barang' => $this->request->getVar('nama_barang'),
        'harga' => $this->request->getVar('harga'),
        'stok' => $this->request->getVar('stok'),
        'status' => $this->request->getVar('status')
    ]);
     session()->setFlashdata('message', 'Data umum berhasil ditambahkan !');
        return redirect()->to('/umum');
    }

    function edit($id)
    {
        $dataumum = $this->umum->find($id);
        if (empty($dataumum)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data umum tidak ditemukan !');
        }

        $data['umum'] = $dataumum;
        return view('umum-edit', $data);
    }

    public function saveEdit($id)
    {
        if (!$this->validate([
            'nama_barang' => [
                'rules' => 'required',
                'errors' => [
                   'required' => 'Nama Barang harus diisi!'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!'
                ]
            ],
            'stok' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!'
                ]
            ],
    ])) {
        session()->setFlashdata('error', $this->validator->listErrors());
        return redirect()->back();
    }

    $this->umum->update($id, [
        'nama_barang' => $this->request->getVar('nama_barang'),
        'harga' => $this->request->getVar('harga'),
        'stok' => $this->request->getVar('stok'),
        'status' => $this->request->getVar('status')
    ]);
     session()->setFlashdata('message', 'Data umum berhasil diperbaikin !');
        return redirect()->to('/umum');
    }

    function delete($id)
    {
         $dataumum = $this->umum->find($id);
        if (empty($dataumum)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data umum tidak ditemukan !');
        }

        $this->umum->delete($id);
        session()->setFlashdata('message', 'Berhasil menghapus data umum !');
        return redirect()->to('/umum');
    }
}


