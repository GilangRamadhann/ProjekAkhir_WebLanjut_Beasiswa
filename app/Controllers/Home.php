<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
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
