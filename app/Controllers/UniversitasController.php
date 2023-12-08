<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UniversitasModel;

class UniversitasController extends BaseController
{
    public $univModel;

    public function __construct()
    {
        $this->univModel = new UniversitasModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Universitas',
            'universitas' => $this->univModel->getUniversitas(),
        ];

        return view('admin/univ', $data);
    }

    public function tambah()
    {

        $data = [
            'title' => 'Tambah Data Universitas',
        ];

        return view('admin/tambah_univ', $data);
    }

    public function store()
    {

        if(!$this->validate($this->univModel->getValidationRules())){
             session()->setFlashdata('errors', $this->validator->listErrors());
             return redirect()->back()->withInput();
        }

        $this->univModel->saveUniversitas([
            'universitas' => $this->request->getVar('universitas'),
        ]);

        return redirect()->to(base_url('/datauniv'));
    }

    public function edit($id)
    {
        $universitas = $this->univModel->getUniversitas($id);

        $data = [
            'title' => 'Ubah Data Universitas',
            'universitas' => $universitas,
        ];

        return view('admin/edit_univ', $data);
    }

    public function update($id)
    {

        $data = [
            'universitas' => $this->request->getVar('universitas')
        ];

        if(!$this->validate($this->univModel->getValidationRules())){
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
       }

        $result = $this->univModel->updateUniversitas($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data');
        }

        return redirect()->to(base_url('/datauniv'));
    }

    public function hapus($id)
    {
        $this->univModel->delete($id);

        return redirect('datauniv')->with('Berhasil', 'Data Berhasil Dihapus');
    }
}
