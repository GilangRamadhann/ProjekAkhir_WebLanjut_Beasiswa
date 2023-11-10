<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
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
    public function beswan()
    {
        return view('beswan');
    }

    public function dashboard_donatur()
    {
        return view('dashboard_donatur');
    }
}
