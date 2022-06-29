<?php
namespace App\Controllers;
use App\models\UsersModel; //Menggunakan file model yang bernama UsersModel
class Register extends BaseController // class register merupakan varian dari BaseController
{
    public function index() //membuat fungsi index dengan sifat public
    {
        return view('register');
    }
    public function process()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 karakter',
                    'max_length' => '{field} Maksimal 20 karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' =>[
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 karakter',
                    'max_length' => '{field} Maksimal 50 karakter',
                ]
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' =>[
                    'matches' => 'Konfirmasi password tidak sesuai dengan password',
                ]
            ],
            'name' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' =>[
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 karakter',
                    'max_length' => '{field} Maksimal 100 karakter',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new UsersModel();
        $users->insert([
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'name' => $this->request->getVar('name')
        ]);
        return redirect()->to('/login');
    }
}