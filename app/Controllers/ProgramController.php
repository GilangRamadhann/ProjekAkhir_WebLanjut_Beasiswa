<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProgramModel;
use App\Models\DonaturModel;


class ProgramController extends BaseController
{
    public $donaturModel;
    public $programModel;
    protected $db;
    protected $builder;

    public function __construct()
    {
        // $this->db      = \Config\Database::connect();
        // $this->builder = $this->db->table('program');
        $this->programModel = new ProgramModel();
        $this->donaturModel = new DonaturModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Program Beasiswa',
            'program' => $this->programModel->getProgram(),
        ];

        return view('donatur/program', $data);
    }

    public function detail()
    {
        $data = [
            'title' => 'Program Beasiswa',
        ];

        return view('donatur/detail_program', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Program Beasiswa',
        ];

        return view('donatur/tambah_program', $data);
    }

    public function save()
    {
        
    }

    public function edit()
    {
        $data = [
            'title' => 'Ubah Program Beasiswa',
        ];

        return view('donatur/edit_program', $data);
    }

    public function update()
    {
        
    }

    public function destroy()
    {
        
    }
}
