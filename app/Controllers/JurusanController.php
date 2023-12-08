<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JurusanModel;

class JurusanController extends BaseController
{
    public $jurModel;

    public function __construct()
    {
        $this->jurModel = new JurusanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Jurusan',
            'jurusan' => $this->jurModel->getJurusan(),
        ];

        return view('admin/jurusan', $data);
    }

    public function tambah()
    {

        $data = [
            'title' => 'Tambah Data Jurusan',
        ];

        return view('admin/tambah_jur', $data);
    }

    public function store()
    {

        if(!$this->validate($this->jurModel->getValidationRules())){
             session()->setFlashdata('errors', $this->validator->listErrors());
             return redirect()->back()->withInput();
        }

        $this->jurModel->saveJurusan([
            'jurusan' => $this->request->getVar('jurusan'),
        ]);

        return redirect()->to(base_url('/datajur'));
    }

    public function edit($id)
    {
        $jurusan = $this->jurModel->getJurusan($id);

        $data = [
            'title' => 'Ubah Data Jurusan',
            'jurusan' => $jurusan,
        ];

        return view('admin/edit_jur', $data);
    }

    public function update($id)
    {

        $data = [
            'jurusan' => $this->request->getVar('jurusan')
        ];

        if(!$this->validate($this->jurModel->getValidationRules())){
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
       }

        $result = $this->jurModel->updateJurusan($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data');
        }

        return redirect()->to(base_url('/datajur'));
    }

    public function hapus($id)
    {
        $this->jurModel->delete($id);

        return redirect('datajur')->with('Berhasil', 'Data Berhasil Dihapus');
    }
}
