<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class LoginController extends BaseController
{
    public $user;

    public function __construct(){
        $this->user = new User();
    }

    public function index()
    {
        return view('login');
    }

    public function store(){

        // if(!$this->validate($this->user->getValidationRules())){
        //      session()->setFlashdata('errors', $this->validator->listErrors());
        //      return redirect()->back()->withInput();
        // }
 
         $this->user->saveUser([
             'name' => $this->request->getVar('name'),
             'email' => $this->request->getVar('email'),
             'username' => $this->request->getVar('username'),
             'password' => $this->request->getVar('password'),  
             'role' => $this->request->getVar('role'),     
         ]);
         
         return redirect()->to(base_url('/regist'));
     }

    public function checkLogin(){

        $user = new User();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $cek = $user->get_data($email, $password);

        if (($cek['email'] == $email) && ($cek['password'] == $password)){
            session()->set('email', $cek['email']);
            session()->set('name', $cek['name']);
            session()->set('id', $cek['id']);
            return redirect()->to(base_url('/dashboard'));
        } else {
            session()->setFlashdata('gagal', 'Username / Password salah');
            return redirect()->to(base_url('/login'));
        }
    }
}
