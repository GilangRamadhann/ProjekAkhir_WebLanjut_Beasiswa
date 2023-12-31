<?php

namespace App\Controllers;
use App\Models\ProgramModel;

class Home extends BaseController
{
    public function index()
    {   
       
        if (in_groups("Admin")){
            return redirect()->route("dashboard"); 
        }else if(in_groups("Donatur")){
            return redirect()->route("donatur"); 
        }else if(in_groups("Beswan")){
            return redirect()->route("beswan"); 
        }   
        return view('index');
    }
    
    public function regist()
    {
        return view('regist');
    }

    public function dashboard()
    {
        return view('admin_dashboard');
    }

    public function programbeasiswa()
    {
        return view('admin_programbeas');
    }

    public function detail_programbeasiswa()
    {
        return view('admin/detail_programbeasiswa');
    }

    public function daftardonatur()
    {
        return view('admin_daftardonatur'); 
    }

    public function detail_daftardonatur()
    {
        return view('admin/detail_daftardonatur'); 
    }

    public function penerimabeasiswa()
    {
        return view('admin_penerimabeas');
    }

    public function detail_penerimabeasiswa()
    {
        return view('admin/detail_penerimabeasiswa');
    }

    public function dataakademik()
    {
        return view('admin_dataakademik');
    }

    public function pengeluaran()
    {
        return view('admin_pengeluaran');
    }

    public function detail_pengeluaran()
    {
        return view('admin/detail_pengeluaran');
    }

    public function beswan()
    {
        return view('beswan/beswan');
    }

    public function dashboard_donatur()
    {
        return view('donatur/dashboard_donatur');
    }

    public function profiledon()
    {
        return view('donatur/profile_donatur');
    }

    public function beadonatur()
    {    
        $models = new ProgramModel();
        $data = $models->getProgram();
        //dd($data);
        return view('donatur/bea_donatur',["data" => $data]);
    }

    public function pendaftarbeasiswa(){

        return view('donatur/donatur_pendaftarbeasiswa');
    
        }

    public function penerima(){
        return view('donatur/donatur_penerimabeasiswa');
    }

    public function daftarpengeluaran(){
        return view('donatur/donatur_daftarpengeluaran');
    }

    public function editprofile(){
        return view('donatur/donatur_editprofile');
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

    public function editprogbes(){
        return view('donatur/donatur_editprogbes');
    }

    public function profil(){
        return view('beswan/profil');
    }

    public function listbea(){
        return view('beswan/listbea');
    }

    public function donbes(){
        return view('beswan/donbes');
    }

    public function penglu(){
        return view('beswan/penglu');
    }

}
