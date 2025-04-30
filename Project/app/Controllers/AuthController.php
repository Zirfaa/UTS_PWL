<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    function __construct(){
        helper('form');
    }

    public function generatepassword ()
    {
        echo password_hash('123',PASSWORD_DEFAULT);
    }
    public function genpass ()
    {
        echo password_hash('456',PASSWORD_DEFAULT);
    }

    public function login(){
        if ($this->request->getPost()) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
    
            $dataUser = [
                ['username' => 'april', 'password' => '$2y$10$2hul/eSl5SuXCFydTKowcOeLgcdS.D9jfdfauqlrLIeQLqYwxPGNi', 'role' => 'admin'],// passw 123
                ['username' => 'budi', 'password' => '$2y$10$WMUbkQW1VQkjwD6ply1lVuCjA4k7WxvIlpEueCwcmZG9Gz/XHr.9.', 'role' => 'user']// passw 456
            ]; 
    
            // Cari user berdasarkan username
            $user = array_filter($dataUser, fn($u) => $u['username'] === $username);
            $user = reset($user); // Ambil user pertama (jika ada)
    
            if ($user) {
                // Verifikasi password
                if (password_verify($password, $user['password'])) {
                    session()->set([
                        'username' => $user['username'],
                        'role' => $user['role'],
                        'isLoggedIn' => TRUE
                    ]);
                } else {
                    session()->setFlashdata('failed', 'Username & Password Salah');
                    return redirect()->back();
                }
                if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
                    // Jika bukan admin, redirect ke halaman lain (misalnya login atau halaman error)
                    return redirect()->to(base_url('/produk'));
                    exit();
                }
                else{
                    return redirect()->to(base_url('/dashboard'));
                }
            } else {
                session()->setFlashdata('failed', 'Username Tidak Ditemukan');
                return redirect()->back();
            }
        } else {
            return view('login');
        }
    }
    
    public function logout(){
    session()->destroy();
    return redirect()->to('login');
    }
}
