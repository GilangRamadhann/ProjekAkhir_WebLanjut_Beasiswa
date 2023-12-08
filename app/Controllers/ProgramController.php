<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProgramModel;

class ProgramController extends BaseController
{

    public $progModel;

    public function __construct(){
        $this->progModel = new ProgramModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Program Beasiswa',
            'program' => $this->progModel->getProgram(), 
        ]; 

        return view('admin/admin_programbeas', $data);
    }

}
