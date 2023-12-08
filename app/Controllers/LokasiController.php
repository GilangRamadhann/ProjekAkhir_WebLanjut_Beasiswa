<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LokasiModel;

class LokasiController extends BaseController
{

    public $lokasiModel;

    public function __construct()
    {
        $this->lokasiModel = new LokasiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Lokasi',
            'lokasi' => $this->lokasiModel->getLokasi(),
        ];

        return view('admin/lokasi', $data);
    }

    public function tambah_lokasi()
    {

        $data = [
            'title' => 'Tambah Data Lokasi',
        ];

        return view('admin/tambah_lokasi', $data);
    }

    public function store()
    {

        if (!$this->validate($this->lokasiModel->getValidationRules())) {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->lokasiModel->saveLokasi([
            'kota' => $this->request->getVar('kota'),
        ]);

        return redirect()->to(base_url('/datalokasi'));
    }

    public function edit($id)
    {
        $lokasi = $this->lokasiModel->getLokasi($id);

        $data = [
            'title' => 'Ubah Data Lokasi',
            'lokasi' => $lokasi,
        ];

        return view('admin/edit_lokasi', $data);
    }

    public function update($id)
    {

        $data = [
            'kota' => $this->request->getVar('kota')
        ];

        if (!$this->validate($this->lokasiModel->getValidationRules())) {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $result = $this->lokasiModel->updateLokasi($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data');
        }

        return redirect()->to(base_url('/datalokasi'));
    }


    public function hapus($id)
    {
        $this->lokasiModel->delete($id);

        return redirect('datalokasi')->with('Berhasil', 'Data Berhasil Dihapus');
    }
}
