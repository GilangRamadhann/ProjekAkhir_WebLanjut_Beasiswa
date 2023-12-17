<?php

namespace App\Controllers;
use App\Models\ProgramModel;
use App\Models\UniversitasModel;
use App\Models\DaftarModel;
use App\Models\BeswanModel;
use App\Models\PengeluaranModel;

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
        $models = new ProgramModel();
        $data = $models->getProgram();
        
        return view('admin/admin_programbeas',["program"=>$data]);
    }
    public function detail_programbeasiswa($id){
        $models = new ProgramModel();
        $data = $models->getProgram($id);
        
        return view('admin/detail_programbeasiswa',$data);
    }

    // METHOD DONATUR
    public function dashboard_donatur(){
        $daftarModel = new DaftarModel();
        $user_id = user_id(); // Replace with the actual way you get the user ID
        $models = new ProgramModel();
        $program = count($models->findAll());

        $pendaftar = $daftarModel
        ->select('daftar_terima.*, program.*,daftar_terima.id as daftarTerimaId, universitas.universitas as universitas_nama, program.nama as program_nama, beswan.nama as beswan_nama,daftar_terima.id as dataId')
        ->join('universitas', 'universitas.id = daftar_terima.id_univ')
        ->join('program', 'program.id = daftar_terima.id_program')
        ->join('beswan', 'beswan.id = daftar_terima.id_beswan')
        ->join('donatur', 'donatur.id = program.id_donatur')
        ->where('donatur.id_user', user_id())
        ->findAll();
        $daftar = $daftarModel
        ->select('daftar_terima.*, program.*, beswan.*,universitas.*, beswan.nama as namabeswan, program.nama as namaprogram') // Include all columns from both tables
        ->join('program', 'program.id = daftar_terima.id_program')
        ->join('universitas', 'universitas.id = daftar_terima.id_univ')
        ->join('donatur', 'donatur.id = program.id_donatur')
        ->join('beswan', 'daftar_terima.id_beswan = beswan.id')
        ->where('donatur.id_user', $user_id)
        ->where('status', 'Di Terima')
        ->findAll();
        return view('donatur/dashboard_donatur',["data"=>$daftar,"program"=>$program,"penerima"=>count($daftar),"pendaftar"=>count($pendaftar)]);
    }
    public function pendaftar(){
        
       //dd($beswan);


        $daftarModel = new DaftarModel();
        $daftar = $daftarModel
        ->select('daftar_terima.*, program.*,daftar_terima.id as daftarTerimaId, universitas.universitas as universitas_nama, program.nama as program_nama, beswan.nama as beswan_nama,daftar_terima.id as dataId')
        ->join('universitas', 'universitas.id = daftar_terima.id_univ')
        ->join('program', 'program.id = daftar_terima.id_program')
        ->join('beswan', 'beswan.id = daftar_terima.id_beswan')
        ->join('donatur', 'donatur.id = program.id_donatur')
        ->where('donatur.id_user', user_id())
        ->findAll();
       // dd($daftar);
        $data = [
            "daftar" => $daftar,
        ];
        return view('donatur/pendaftar',$data);
    }
    public function penerimaan($id){
        $daftarModel = new DaftarModel();
        if($this->request->getMethod()=="post"){
            $data = $this->request->getVar(['status']);
            $daftarModel->update($id,$data);
            return redirect()->to(base_url('pendaftar'));
        }
       
        $data = $daftarModel->find($id);
        //dd($data);
        return view('donatur/penerimaan',["data"=>$data]);
    }
    public function penerima(){
        $daftarModel = new DaftarModel();
        $user_id = user_id(); // Replace with the actual way you get the user ID

        $daftar = $daftarModel
        ->select('daftar_terima.*, program.*, beswan.*,universitas.*, beswan.nama as namabeswan, program.nama as namaprogram') // Include all columns from both tables
        ->join('program', 'program.id = daftar_terima.id_program')
        ->join('universitas', 'universitas.id = daftar_terima.id_univ')
        ->join('donatur', 'donatur.id = program.id_donatur')
        ->join('beswan', 'daftar_terima.id_beswan = beswan.id')
        ->where('donatur.id_user', $user_id)
        ->where('status', 'Di Terima')
        ->findAll();
    

        //dd($daftar);
        return view('donatur/penerima',['data'=>$daftar]);
    }
    public function detail_penerima($id){
        //dd($id);
        $beswanModel = new BeswanModel();
        $data = $beswanModel
        ->select('beswan.*, jurusan.jurusan, fakultas.fakultas, universitas.universitas, lokasi.kota')
        ->join('jurusan', 'jurusan.id = beswan.id_jurusan')
        ->join('fakultas', 'fakultas.id = beswan.id_fakultas')
        ->join('universitas', 'universitas.id = beswan.id_univ')
        ->join('lokasi', 'lokasi.id = beswan.id_lokasi')
        ->find($id);
    
        //dd($data);
        return view('donatur/detail_penerima',$data);
    }
    public function laporan2(){
        $pengeluaranModel = new PengeluaranModel();
        $beswanModel = new BeswanModel();
        $beswan = $beswanModel->where('id_user', user_id())->first();
        $data = $pengeluaranModel->findAll();
        
        foreach ($data as &$row) {
            // Calculate totals for each row
            $row['pemasukan'] = $row['beasiswa'] + $row['orang_tua'] + $row['upah'];
            $row['pengeluaran'] = $row['makan'] + $row['kos'] + $row['internet'] + $row['buku'] + $row['kursus'] + $row['lainlain']+$row['transportasi'];
        }
        
        return view('donatur/laporan_pengeluaran',["data"=>$data]);
    }
    public function detail_laporan(){
        return view('donatur/detail_laporan');
    }
    public function program(){    
        $models = new ProgramModel();
        $data = $models->findAll();
        //dd($data);
      
        return view('donatur/program',["data" => $data,'title' => "PROGRAM"]);
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

    public function editprogbes($id=null){
        $models = new ProgramModel();
      
        if($this->request->getMethod()=="post"){
            
            $data=[
                "nama" => $this->request->getVar("nama"),
                
                "deskripsi" => $this->request->getVar("deskripsi"),
                "ketentuan" => $this->request->getVar("ketentuan"),
                "syarat" => $this->request->getVar("syarat"),
                
                "tgl_buka" => $this->request->getVar("tgl_buka"),
                "tgl_tutup" => $this->request->getVar("tgl_tutup"),

            ];
            //dd($data);
            $models->updateProgram($data,$id);
            return redirect()->to(base_url('program'));
        }
        //dd($id);
       
        $data = $models->find   ($id);
        //dd($data);
        
        return view('donatur/edit_program',["data" => $data,"title"=>'EDIT']);
    }
    public function pengeluaran(){
        $pengeluaranModel = new PengeluaranModel();
        $beswanModel = new BeswanModel();
        $beswan = $beswanModel->where('id_user', user_id())->first();
        $data = $pengeluaranModel->where('id_beswan',$beswan['id'])->findAll();
        
        foreach ($data as &$row) {
            // Calculate totals for each row
            $row['pemasukan'] = $row['beasiswa'] + $row['orang_tua'] + $row['upah'];
            $row['pengeluaran'] = $row['makan'] + $row['kos'] + $row['internet'] + $row['buku'] + $row['kursus'] + $row['lainlain']+$row['transportasi'];
        }
        
        // dd($data);
        return view('beswan/laporan',["data"=>$data]);
    }
    public function tambah_laporan(){
        if($this->request->getMethod()=="post"){
        $beswanModel = new BeswanModel();
        $daftarModel = new DaftarModel();
        $programModel = new ProgramModel();
        $beswan = $beswanModel->where('id_user', user_id())->first();
        $daftar = $daftarModel->where('id_beswan',$beswan['id'])->first();
        $program = $programModel->where('id',$daftar['id_program'])->first();
      
        $data = [
            'id_beswan' => $beswan['id'],
            'id_program' => $daftar['id_program'],
            'beasiswa' => $this->request->getPost('beasiswa'),
            'orang_tua'  => $this->request->getPost('orangtua'), 
            'upah'       => $this->request->getPost('upah'),
            'bulan'      => $this->request->getPost('bulan'),
            'makan'      => $this->request->getPost('makan'),
            'transportasi'      => $this->request->getPost('transportasi'),
            'kos'        => $this->request->getPost('kos'),
            'internet'   => $this->request->getPost('internet'),
            'buku'       => $this->request->getPost('buku'),
            'kursus'     => $this->request->getPost('kursus'),
            'lainlain'   => $this->request->getPost('lainlain'),
        ];
        $pengeluaranModel = new PengeluaranModel();
        //dd($data);
        $pengeluaranModel->save($data);
        return redirect()->to(base_url('laporan_pengeluaran'));
        }
        
        return view('beswan/tambah_laporan');
    }
    public function edit_laporan($id){
        $pengeluaranModel = new PengeluaranModel();
       
        if($this->request->getMethod()=="post"){
            $data = [
                'beasiswa' => $this->request->getPost('beasiswa'),
                'orang_tua'  => $this->request->getPost('orangtua'), 
                'upah'       => $this->request->getPost('upah'),
                'bulan'      => $this->request->getPost('bulan'),
                'makan'      => $this->request->getPost('makan'),
                'transportasi' => $this->request->getPost('transportasi'),
                'kos'        => $this->request->getPost('kos'),
                'internet'   => $this->request->getPost('internet'),
                'buku'       => $this->request->getPost('buku'),
                'kursus'     => $this->request->getPost('kursus'),
                'lainlain'   => $this->request->getPost('lainlain'),
            ];
            $pengeluaranModel->update($id,$data);
            return redirect()->to(base_url('laporan_pengeluaran'));
        }
        $data = $pengeluaranModel->find($id);

        return view('beswan/edit_laporan',$data);
        
    }
    public function delete_laporan($id){
        $pengeluaranModel = new PengeluaranModel();
        $data = $pengeluaranModel->delete($id);
        return redirect()->back();
    }
    public function lihat_laporan($id){
        $pengeluaranModel = new PengeluaranModel();
        $data = $pengeluaranModel->find($id);
        //dd($data);
            $data['pemasukan'] = $data['beasiswa'] + $data['orang_tua'] + $data['upah'];
            $data['pengeluaran'] = $data['makan'] + $data['kos'] + $data['internet'] + $data['buku'] + $data['kursus'] + $data['lainlain']+$data['transportasi'];
        
        return view('beswan/detail_laporan',$data);
    }
    public function beswan(){
        $daftarModel = new DaftarModel();
        
        $beswanModel = new BeswanModel();
        
        $beswan = $beswanModel->where('id_user', user_id())->first();
       //dd($beswan);
        $daftar = $daftarModel
                ->select('daftar_terima.*, program.*,daftar_terima.id as daftarTerimaId, universitas.universitas as universitas_nama, program.nama as program_nama, beswan.nama as beswan_nama,daftar_terima.id as dataId')
                ->join('universitas', 'universitas.id = daftar_terima.id_univ')
                ->join('program', 'program.id = daftar_terima.id_program')
                ->join('beswan', 'beswan.id = daftar_terima.id_beswan')
                ->where('daftar_terima.id_beswan', $beswan['id'])
                ->findAll();
        return view('beswan/dashboard',["data"=>$daftar]);
    }
    public function daftarprogram(){
        $programModel = new ProgramModel();
        
        $programs = $programModel
    ->select('donatur.*,program.*,  donatur.nama as donatur_nama, program.nama as program_nama') // Use aliases to distinguish columns
    ->join('donatur', 'program.id_donatur = donatur.id')
    ->findAll();

      
        //dd($programs);
        return view('beswan/program',["program"=> $programs]);
    }
    public function lihat_program($id){
        $programModel = new ProgramModel();
        //dd($id);
        $programs = $programModel
    ->select('donatur.*,program.*,  donatur.nama as donatur_nama, program.nama as program_nama') // Use aliases to distinguish columns
    ->join('donatur', 'program.id_donatur = donatur.id')
    ->find($id);
    //dd($programs); 
        return view('beswan/detail_program',['program'=>$programs]);
    }
    public function mendaftar($id){
        $programModel = new ProgramModel();
        $univModel = new UniversitasModel();
        $daftarModel = new DaftarModel();
        if($this->request->getVar("page")=="edit"){
           
            
            if ($this->request->getFile('berkas') !== null && $this->request->getFile('berkas')->isValid()) {

                $file = $this->request->getFile('berkas');
            $newName = $file->getRandomName();
            $path = 'assets/uploads/berkas/'.$newName;
            $file->move('assets/uploads/berkas/', $newName);
            $data = [
               
                'berkas'=> $path,
                "id_univ" => $this->request->getVar("univ"),
            ];
            // dd($data);
            $daftarModel->update($id,$data);
            return redirect()->to('pendaftaran');
            
            }

            $data = [
               
                'berkas'=>$this->request->getVar("path"),
                "id_univ" => $this->request->getVar("univ"),
            ];
            //dd($data);
            $daftarModel->update($id,$data);
            return redirect()->to('pendaftaran');
        }else if ($this->request->getMethod() === 'post' && $this->validate(['berkas' => 'uploaded[berkas]|ext_in[berkas,zip]'])) {
            $daftarModel = new  DaftarModel();
            $beswanModel = new BeswanModel();
            $file = $this->request->getFile('berkas');
            $newName = $file->getRandomName();
            $path = 'assets/uploads/berkas/'.$newName;
            $file->move('assets/uploads/berkas/', $newName);
            $beswan = $beswanModel->where('id_user', user_id())->first();
            $data = [
                "id_univ" => $this->request->getVar("univ"),
                "id_program" => $id,
                "id_beswan" => $beswan['id'],
                "berkas" => $path,

             ];
             
             //dd($beswan);
             $daftarModel->save($data);
            //dd($data);
            return redirect()->to(base_url('daftarprogram'))->with('success', 'File uploaded successfully!');
            
        }

        $programs = $programModel
        ->select('donatur.*,program.*,  donatur.nama as donatur_nama, program.nama as program_nama') // Use aliases to distinguish columns
        ->join('donatur', 'program.id_donatur = donatur.id')
        ->find($id);
        $data = ['program'=>$programs,'universitas' => $univModel->orderby('universitas')->findAll(),];
        return view('beswan/form_daftar',$data);
    }
    public function pendaftaran(){
        $daftarModel = new DaftarModel();
        
        $beswanModel = new BeswanModel();
        
        $beswan = $beswanModel->where('id_user', user_id())->first();
       //dd($beswan);
        $daftar = $daftarModel
                ->select('daftar_terima.*, program.*,daftar_terima.id as daftarTerimaId, universitas.universitas as universitas_nama, program.nama as program_nama, beswan.nama as beswan_nama,daftar_terima.id as dataId')
                ->join('universitas', 'universitas.id = daftar_terima.id_univ')
                ->join('program', 'program.id = daftar_terima.id_program')
                ->join('beswan', 'beswan.id = daftar_terima.id_beswan')
                ->where('daftar_terima.id_beswan', $beswan['id'])
                ->findAll();
        
        //dd($daftar);
        return view('beswan/statusdaftar',["data"=>$daftar]);
    }
    public function edit_pendaftaran($id){
        $daftarModel = new DaftarModel();
        $univModel = new UniversitasModel();
        $beswanModel = new BeswanModel();
        $beswan = $beswanModel->where('id_user', user_id())->first();
       // dd($beswan);
        $daftar = $daftarModel
        ->select('daftar_terima.*, program.*, daftar_terima.id as daftarTerimaId, universitas.universitas as universitas_nama, program.nama as program_nama, beswan.nama as beswan_nama')
        ->join('universitas', 'universitas.id = daftar_terima.id_univ')
        ->join('program', 'program.id = daftar_terima.id_program')
        ->join('beswan', 'beswan.id = daftar_terima.id_beswan')
        ->where('daftar_terima.id_beswan', $beswan['id'])
        ->find($id);
        //dd($daftar);
        return view('beswan/edit_pendaftaran',["data"=>$daftar,'universitas' => $univModel->orderby('universitas')->findAll(),]);
    }
}
