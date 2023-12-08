<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FakultasModel;

class FakultasController extends BaseController
{
    public $fakModel;

    public function __construct()
    {
        $this->fakModel = new FakultasModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Fakultas',
            'fakultas' => $this->fakModel->getFakultas(),
        ];

        return view('admin/fakultas', $data);
    }

    public function tambah()
    {

        $data = [
            'title' => 'Tambah Data Fakultas',
        ];

        return view('admin/tambah_fak', $data);
    }

    public function store()
    {

        if(!$this->validate($this->fakModel->getValidationRules())){
             session()->setFlashdata('errors', $this->validator->listErrors());
             return redirect()->back()->withInput();
        }

        $this->fakModel->saveFakultas([
            'fakultas' => $this->request->getVar('fakultas'),
        ]);

        return redirect()->to(base_url('/datafak'));
    }

    public function edit($id)
    {
        $fakultas = $this->fakModel->getFakultas($id);

        $data = [
            'title' => 'Ubah Data Fakultas',
            'fakultas' => $fakultas,
        ];

        return view('admin/edit_fak', $data);
    }

    public function update($id)
    {

        $data = [
            'fakultas' => $this->request->getVar('fakultas')
        ];

        if(!$this->validate($this->fakModel->getValidationRules())){
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
       }

        $result = $this->fakModel->updateFakultas($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data');
        }

        return redirect()->to(base_url('/datafak'));
    }

    public function hapus($id)
    {
        $this->fakModel->delete($id);

        return redirect('datafak')->with('Berhasil', 'Data Berhasil Dihapus');
    }
}
