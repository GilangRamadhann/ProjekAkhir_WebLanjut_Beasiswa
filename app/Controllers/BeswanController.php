<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BeswanModel;
use App\Models\LokasiModel;
use App\Models\UniversitasModel;
use App\Models\FakultasModel;
use App\Models\JurusanModel;
use App\Models\UserModel;

class BeswanController extends BaseController
{
    public $beswanModel;
    public $userModel;
    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('beswan');
        $this->beswanModel = new BeswanModel();
        $this->userModel = new UserModel();
    }

    // public function index()
    // {
    //     return view('donatur/profile_donatur'); 
    // }

    public function profile()
    {
        
        $userId = user_id();

        // Select beswan attributes
        $this->builder->select('nama, npm, jurusan, fakultas, universitas, akt, agama, tgl_lahir, no_telp, foto, alamat, kota');
        $this->builder->where('id_user', $userId);
        $this->builder->join('universitas', 'universitas.id = beswan.id_univ');
        $this->builder->join('fakultas', 'fakultas.id = beswan.id_fakultas');
        $this->builder->join('jurusan', 'jurusan.id = beswan.id_jurusan');
        $this->builder->join('lokasi', 'lokasi.id = beswan.id_lokasi');
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
            'title'     => 'Profil Beswan', 
            'beswan'   => $query->getResult(),
            'check'     => $check
        ];

        return view('beswan/profil', $data);
    }

    public function create(){

        $lokasiModel = new LokasiModel();
        $jurModel = new JurusanModel();
        $fakModel = new FakultasModel();
        $univModel = new UniversitasModel();
        $userId = user_id();

        $this->beswanModel = new BeswanModel();

        $beswan = $this->beswanModel->getBeswan();

        $data = [
            'title' => 'Tambah Profil Beswan',
            'beswan' => $beswan,
            'jurusan' => $jurModel->orderby('jurusan')->findAll(),
            'fakultas' => $fakModel->orderby('fakultas')->findAll(),
            'universitas' => $univModel->orderby('universitas')->findAll(),
            'lokasi' => $lokasiModel->orderby('kota')->findAll(),
            'id_user' => $userId,
        ];

        // dd($data);
        return view ('beswan/tambah_beswan', $data);
    }

    public function save(){

        $lokasiModel = new LokasiModel();
        $jurModel = new JurusanModel();
        $fakModel = new FakultasModel();
        $univModel = new UniversitasModel();

        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');
        $name = $foto->getRandomName();

        if($foto->move($path, $name)) 
        {
            $foto = base_url($path . $name);
        }

        // dd($this->request->getVar());
        $this->beswanModel->saveBeswan([
            'id_user' => $this->request->getVar('id_user'),
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'id_jurusan' => $this->request->getVar('id_jurusan'),
            'id_fakultas' => $this->request->getVar('id_fakultas'),
            'id_univ' => $this->request->getVar('id_univ'),
            'akt' => $this->request->getVar('akt'),
            'agama' => $this->request->getVar('agama'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'no_telp' => $this->request->getVar('no_telp'),
            'foto' => $foto,
            'alamat' => $this->request->getVar('alamat'),
            'id_lokasi' => $this->request->getVar('id_lokasi'),
        ]);

        return redirect()->to(base_url('/profil'));
    }

    public function edit()
    {
        $lokasiModel = new LokasiModel();
        $jurModel = new JurusanModel();
        $fakModel = new FakultasModel();
        $univModel = new UniversitasModel();
        $userId = user_id();

        // Select applicant attributes
        $this->builder->select('id, nama, npm, akt, agama, tgl_lahir, no_telp, foto, alamat');
        $this->builder->where('id_user', $userId);
        $query = $this->builder->get();

        $data = [
            'title' => 'Ubah Profile Beswan',
            'beswan_data' => $query->getResult(),
            'jurusan' => $jurModel->orderby('jurusan')->findAll(),
            'fakultas' => $fakModel->orderby('fakultas')->findAll(),
            'universitas' => $univModel->orderby('universitas')->findAll(),
            'lokasi' => $lokasiModel->orderby('kota')->findAll(),
        ];

        return view ('beswan/edit_beswan', $data);
    }

    public function update()
    {
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');
        $id = $this->request->getVar('id');

        $data = [
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'id_jurusan' => $this->request->getVar('id_jurusan'),
            'id_fakultas' => $this->request->getVar('id_fakultas'),
            'id_univ' => $this->request->getVar('id_univ'),
            'akt' => $this->request->getVar('akt'),
            'agama' => $this->request->getVar('agama'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'no_telp' => $this->request->getVar('no_telp'),
            'alamat' => $this->request->getVar('alamat'),
            'id_lokasi' => $this->request->getVar('id_lokasi'),
        ];

        if($foto->isValid()){
            $name = $foto->getRandomName();

            if($foto->move($path, $name)){
                $foto_path = base_url($path . $name);
                $data['foto'] = $foto_path;
            }
        }

        $result = $this->beswanModel->updateBeswan($data, $id);

        if(!$result){
            return redirect()->back()->withInput();
        }

        return redirect()->to(base_url('/profil'));
    }
}
