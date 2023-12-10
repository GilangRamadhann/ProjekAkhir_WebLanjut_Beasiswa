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
        $auth = service('authentication');
        $userId = $auth->id();

        // Select company attributes
        $this->builder->select('deskripsi', 'no_telp', 'status', 'logo', 'alamat', 'kota', 'instagram', 'facebook');
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
            'donatur'   => $query->getResult(),
            'check'     => $check
        ];

        return view('donatur/profile_donatur', $data);
    }

    public function create(){

        $lokasiModel = new LokasiModel();
        $userModel = new UserModel();

        $this->donaturModel = new DonaturModel();

        $donatur = $this->donaturModel->getDonatur();

        $data = [
            'title' => 'Tambah Data Profile Donatur',
            'donatur' => $donatur,
            'lokasi' => $lokasiModel->orderby('kota')->findAll(),
            'id_user' => $userModel,
        ];
        // dd($kategoriModel->findAll());
        return view ('donatur/tambah_donatur', $data);
    }

    public function save(){

        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('logo');
        $name = $foto->getRandomName();

        if($foto->move($path, $name)) 
        {
            $foto = base_url($path . $name);
        }

        $this->donaturModel->save([
            'id_user' => $this->request->getVar('id_user'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'no_telp' => $this->request->getVar('no_telp'),
            'status' => $this->request->getVar('status'),
            'logo' => $foto,
            'alamat' => $this->request->getVar('alamat'),
            'id_lokasi' => $this->request->getVar('id_lokasi'),
            'instagram' => $this->request->getVar('instagram'),
            'facebook' => $this->request->getVar('facebook'),
        ]);

        return redirect()->to(base_url('donatur/profile_donatur'));
    }

    public function edit()
    {
        $lokasiModel = new LokasiModel();

        $auth = service('authentication');
        $userId = $auth->id();

        // Select applicant attributes
        $this->builder->select('id, deskripsi, no_telp, status, logo, alamat, instagram, facebook');
        $this->builder->where('id_user', $userId);
        $query = $this->builder->get();

        $data = [
            'title' => 'Ubah Donatur',
            'donatur_data' => $query->getResult(),
            'lokasi' => $lokasiModel->orderby('kota')->findAll(),
        ];

        return view ('company/edit_profile', $data);
    }

    public function update()
    {
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('logo');

        $id = $this->request->getVar('id');
        $data = [
            'deskripsi' => $this->request->getVar('deskripsi'),
            'no_telp' => $this->request->getVar('no_telp'),
            'status' => $this->request->getVar('status'),
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

        $result = $this->donaturModel->updateApplicant($data, $id);

        if(!$result){
            return redirect()->back()->withInput();
        }

        return redirect()->to(base_url('donatur/profile_donatur'));
    }


}
