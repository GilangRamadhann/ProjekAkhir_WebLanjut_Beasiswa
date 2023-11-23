<?php

namespace App\Controllers;

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
        return view('dashboard_donatur');
    }

    public function profiledon()
    {
        return view('profile_donatur');
    }

    public function beadonatur()
    {
        return view('bea_donatur');
    }
}
