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
}
