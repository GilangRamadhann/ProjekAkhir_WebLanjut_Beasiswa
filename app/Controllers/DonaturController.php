<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DonaturModel;
use App\Models\LokasiModel;
use App\Models\UserModel;

class DonaturController extends BaseController
{
    public $donaturModel;
    public $userModel;
    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('donatur');
        $this->donaturModel = new DonaturModel();
        $this->userModel = new UserModel();
    }

    // public function index()
    // {
    //     return view('donatur/profile_donatur'); 
    // }

    public function profile()
    {
        
        $userId = user_id();

        // Select donatur attributes
        $this->builder->select('nama, deskripsi, no_telp, logo, alamat, kota, instagram, facebook');
        $this->builder->where('id_user', $userId);
        $this->builder->join('lokasi', 'lokasi.id = donatur.id_lokasi');
        $query = $this->builder->get();

        // Check if there are any results
        if ($query->getNumRows() > 0) {
            // Results found, return true (1)
            $check = 1;
        } else {
            // No results found, return false (0)
            $check = 0;
        }

        $data = [
            'title'     => 'Profil Donatur', 
            'donatur'   => $query->getResult(),
            'check'     => $check
        ];

        return view('donatur/profile_donatur', $data);
    }

    public function create(){
        
        $lokasiModel = new LokasiModel();
        $userId = user_id();

        $this->donaturModel = new DonaturModel();

        $donatur = $this->donaturModel->getDonatur();

        $data = [
            'title' => 'Tambah Profil Donatur',
            'donatur' => $donatur,
            'lokasi' => $lokasiModel->orderby('kota')->findAll(),
            'id_user' => $userId,
        ];

        // dd($data);
        return view ('donatur/tambah_donatur', $data);
    }

    public function save(){

        $lokasiModel = new LokasiModel();
        

        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('logo');
        $name = $foto->getRandomName();

        if($foto->move($path, $name)) 
        {
            $foto = base_url($path . $name);
        }
        // dd($this->request->getVar());
        $this->donaturModel->saveDonatur([
            'id_user' => $this->request->getVar('id_user'),
            'nama' => $this->request->getVar('nama'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'no_telp' => $this->request->getVar('no_telp'),
            'logo' => $foto,
            'alamat' => $this->request->getVar('alamat'),
            'id_lokasi' => $this->request->getVar('id_lokasi'),
            'instagram' => $this->request->getVar('instagram'),
            'facebook' => $this->request->getVar('facebook'),
        ]);

        return redirect()->to(base_url('/profile'));
    }

    public function edit()
    {
        $lokasiModel = new LokasiModel();
        $userId = user_id();

        // Select applicant attributes
        $this->builder->select('id, nama, deskripsi, no_telp, logo, alamat, instagram, facebook');
        $this->builder->where('id_user', $userId);
        $query = $this->builder->get();

        $data = [
            'title' => 'Ubah Profile Donatur',
            'donatur_data' => $query->getResult(),
            'lokasi' => $lokasiModel->orderby('kota')->findAll(),
        ];

        return view ('donatur/edit_donatur', $data);
    }

    public function update()
    {
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('logo');
        $id = $this->request->getVar('id');

        $data = [
            'nama' => $this->request->getVar('nama'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'no_telp' => $this->request->getVar('no_telp'),
            'alamat' => $this->request->getVar('alamat'),
            'id_lokasi' => $this->request->getVar('id_lokasi'),
            'instagram' => $this->request->getVar('instagram'),
            'facebook' => $this->request->getVar('facebook'),
        ];

        if($foto->isValid()){
            $name = $foto->getRandomName();

            if($foto->move($path, $name)){
                $foto_path = base_url($path . $name);
                $data['logo'] = $foto_path;
            }
        }

        $result = $this->donaturModel->updateDonatur($data, $id);

        if(!$result){
            return redirect()->back()->withInput();
        }

        return redirect()->to(base_url('/profile'));
    }


}
