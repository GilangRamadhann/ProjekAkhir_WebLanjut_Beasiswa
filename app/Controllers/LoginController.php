<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function checkLogin()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $userModel = new User();

        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->withInput();
        }

        if (password_verify($password, $user['password'])) {
            return redirect()->to('./');
        }

        return redirect()->back()->withInput();
    }
}
