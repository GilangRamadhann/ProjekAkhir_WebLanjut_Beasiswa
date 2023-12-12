<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AkunController extends BaseController
{
    public $userModel;
    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $this->builder->select('id, username, email');
        $query = $this->builder->get();
        
        $data = [
            'title' => 'Dashboard Admin',
            'akun'   => $query->getResult(),
        ];

        return view('admin/admin_dashboard', $data);
    }

    public function akun()
    {
        $this->builder->select('id, username, email');
        $query = $this->builder->get();
        
        $data = [
            'title' => 'Akun Pengguna',
            'akun'   => $query->getResult(),
        ];

        return view('admin/akun', $data);
    }
}
