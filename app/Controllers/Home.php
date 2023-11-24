<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {   
       
       // $path = "pengurus";
        if (in_groups("Beswan")){
            return redirect()->route("beswan"); 
        }else if(in_groups("Donatur")){
            return redirect()->route("donatur"); 
        }
            
        return view('index');
    }
    
    public function regist()
    {
        return view('regist');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function programbeasiswa()
    {
        return view('admin_programbeas');
    }

    public function penerimabeasiswa()
    {
        return view('admin_penerimabeas');
    }

    public function dataakademik()
    {
        return view('admin_dataakademik');
    }

    public function pengeluaran()
    {
        return view('admin_pengeluaran');
    }

    public function beswan()
    {
        return view('beswan');
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
        return view('donatur/bea_donatur');
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
        return view('donatur/donatur_tambahdatadonatur');
    }

    public function editprogbes(){
        return view('donatur/donatur_editprogbes');
    }

}
