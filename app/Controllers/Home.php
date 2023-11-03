<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('dashboard');
    }

    public function index2(): string
    {
        return view('index');
    }
    public function regist()
    {
        return view('regist');
    }
    public function regist_donatur()
    {
        return view('regist_donatur');
    }
}
