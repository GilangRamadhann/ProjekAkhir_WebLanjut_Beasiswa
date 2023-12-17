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

    public function detail($id)
    {
        $model = new ProgramModel();
        $donaturModel = new DonaturModel();
        $ids = session("id");
        $donatur = $donaturModel->where('id_user', $ids)->first();
        $data = $model->find($id);
        $data['username']= $donatur['nama'];
        //dd($data);
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
        $donaturModel = new DonaturModel();
        $id = session("id");
        $donatur = $donaturModel->where('id_user', $id)->first();
       
        $data=[
            "nama" => $this->request->getVar("nama"),
            "id_donatur" => $donatur['id'],
            "deskripsi" => $this->request->getVar("deskripsi"),
            "ketentuan" => $this->request->getVar("ketentuan"),
            "syarat" => $this->request->getVar("syarat"),
            
            "tgl_buka" => $this->request->getVar("tgl_buka"),
            "tgl_tutup" => $this->request->getVar("tgl_tutup"),
        ];
      //  dd($data);
        try {
       $models = new ProgramModel();
       $models->saveProgram($data);
    } catch (\Exception $e) {
        // Log or print the SQL error
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
       return redirect()->route('program');
        
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
        dd($this->request->getVar());
        
    }

    public function destroy($id=null)
    {
        //dd($id);
        $model = new ProgramModel();
        $model->delete($id);
        return redirect()->back();
    }
}
