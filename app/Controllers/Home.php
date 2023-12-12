<?php

namespace App\Controllers;
use App\Models\ProgramModel;

class Home extends BaseController
{
    public function index(){   
        if (in_groups("Admin")){
            return redirect()->route("dashboard"); 
        } else if(in_groups("Donatur")){
            return redirect()->route("donatur"); 
        } else if(in_groups("Beswan")){
            return redirect()->route("beswan"); 
        }   
            return view('index');
    }
    
    public function regist(){
        return view('regist');
    }

    // METHOD ADMIN
    public function programbeasiswa(){
        return view('admin/admin_programbeas');
    }
    public function detail_programbeasiswa(){
        return view('admin/detail_programbeasiswa');
    }

    // METHOD DONATUR
    public function dashboard_donatur(){
        return view('donatur/dashboard_donatur');
    }
    public function pendaftar(){
        return view('donatur/pendaftar');
    }
    public function penerimaan(){
        return view('donatur/penerimaan');
    }
    public function penerima(){
        return view('donatur/penerima');
    }
    public function detail_penerima(){
        return view('donatur/detail_penerima');
    }
    public function laporan2(){
        return view('donatur/laporan_pengeluaran');
    }
    public function detail_laporan(){
        return view('donatur/detail_laporan');
    }
    public function program(){    
        $models = new ProgramModel();
        $data = $models->getProgram();
        //dd($data);
        return view('donatur/bea_donatur',["data" => $data]);
    }
    public function tambahdata(){
        
        if(is_null($this->request->getVar("add"))){
        return view('donatur/donatur_tambahdatadonatur');
        }else{
            $data=[
                "nama" => $this->request->getVar("nama"),
                "id_user" => session("id"),
                "deskripsi" => $this->request->getVar("deskripsi"),
                "ketentuan" => $this->request->getVar("ketentuan"),
                "syarat" => $this->request->getVar("syarat"),
                "no_telp" => $this->request->getVar("no_telp"),
                "tgl_buka" => $this->request->getVar("tgl_buka"),
                "tgl_tutup" => $this->request->getVar("tgl_tutup"),
            ];
            //dd($data);
           $models = new ProgramModel();
           $models->createProgram($data);
           return redirect()->route('beadonatur');
        }
    }

    // METHOD BESWAN 
    public function beswan(){
        return view('beswan/dashboard');
    }
    public function daftarprogram(){
        return view('beswan/program');
    }
    public function lihat_program(){
        return view('beswan/detail_program');
    }
    public function mendaftar(){
        return view('beswan/form_daftar');
    }
    public function pendaftaran(){
        return view('beswan/statusdaftar');
    }
    public function edit_pendaftaran(){
        return view('beswan/edit_pendaftaran');
    }
    public function pengeluaran(){
        return view('beswan/laporan');
    }
    public function tambah_laporan(){
        return view('beswan/tambah_laporan');
    }
    public function edit_laporan(){
        return view('beswan/edit_laporan');
    }
    public function lihat_laporan(){
        return view('beswan/detail_laporan');
    }
}
