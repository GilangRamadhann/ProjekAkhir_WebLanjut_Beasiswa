<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DonaturModel;

class AdminController extends BaseController
{
    public $daftarDonatur;
    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('donatur');
        $this->daftarDonatur = new DonaturModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Donatur',
            'donatur' => $this->daftarDonatur->getDonatur(),
        ];

        return view('admin/admin_daftardonatur', $data);
    }

    public function lihat()
    {

        $this->builder->select('nama, deskripsi, no_telp, logo, alamat, kota, instagram, facebook');
        $this->builder->join('lokasi', 'lokasi.id = donatur.id_lokasi');
        $query = $this->builder->get(); 

        $data = [
            'title' => 'Detail Data Donatur',
            'donatur'   => $query->getResult(),
        ];

        return view('admin/detail_daftardonatur', $data);
    }
}
