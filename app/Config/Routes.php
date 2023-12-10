<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\LoginController;
use App\Controllers\LokasiController;
use App\Controllers\UniversitasController;
use App\Controllers\FakultasController;
use App\Controllers\JurusanController;

/**
 * @var RouteCollection $routes
 */

// Landing Page
$routes->get('/', 'Home::index');
$routes->get('/regist', 'Home::regist');


// Login untuk semua user
 $routes->get('/loginpage', [LoginController::class, 'index']);
// $routes->post('/checkLogin', [LoginController::class, 'checkLogin']);


// Register
$routes->get('/register', 'Home::regist');
$routes->post('/register/store', [LoginController::class, 'store']);

//donatur
$routes->get('/donatur', 'Home::dashboard_donatur');
$routes->get('/profiledon', 'Home::profiledon');
$routes->get('/beadonatur', 'Home::beadonatur');
$routes->get('/pendaftar', 'Home::pendaftarbeasiswa');
$routes->get('/penerima', 'Home::penerima');
$routes->get('/daftarpengeluaran', 'Home::daftarpengeluaran');
$routes->get('/editprofile', 'Home::editprofile');
$routes->get('/tambahdata', 'Home::tambahdata');
$routes->post('/tambahdata', 'Home::tambahdata');
$routes->get('/editprogbes', 'Home::editprogbes');

//admin
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/daftardonatur', 'ProgramController::index');
$routes->get('/daftardonatur/detail', 'Home::detail_daftardonatur');
$routes->get('/programbeasiswa', 'ProgramController::index');
$routes->get('/programbeasiswa/detail', 'Home::detail_programbeasiswa');
$routes->get('/penerimabeasiswa', 'Home::penerimabeasiswa');
$routes->get('/penerimabeasiswa/detail', 'Home::detail_penerimabeasiswa');
$routes->get('/dataakademik', 'Home::dataakademik');
$routes->get('/pengeluaran', 'Home::pengeluaran');
$routes->get('/pengeluaran/detail', 'Home::detail_pengeluaran');

//CRUD LOKASI
$routes->get('/datalokasi', 'LokasiController::index');
$routes->get('/datalokasi/tambah', 'LokasiController::tambah_lokasi');
$routes->post('/datalokasi/store', 'LokasiController::store');
$routes->get('datalokasi/(:any)/edit', [LokasiController::class, 'edit']);
$routes->put('datalokasi/(:any)', [LokasiController::class, 'update']);
$routes->delete('datalokasi/(:any)', [LokasiController::class, 'hapus']);

//CRUD UNIVERSITAS
$routes->get('/datauniv', 'UniversitasController::index');
$routes->get('/datauniv/tambah', 'UniversitasController::tambah');
$routes->post('/datauniv/store', 'UniversitasController::store');
$routes->get('datauniv/(:any)/edit', [UniversitasController::class, 'edit']);
$routes->put('datauniv/(:any)', [UniversitasController::class, 'update']);
$routes->delete('datauniv/(:any)', [UniversitasController::class, 'hapus']);

//CRUD FAKULTAS
$routes->get('/datafak', 'FakultasController::index');
$routes->get('/datafak/tambah', 'FakultasController::tambah');
$routes->post('/datafak/store', 'FakultasController::store');
$routes->get('datafak/(:any)/edit', [FakultasController::class, 'edit']);
$routes->put('datafak/(:any)', [FakultasController::class, 'update']);
$routes->delete('datafak/(:any)', [FakultasController::class, 'hapus']);

//CRUD JURUSAN
$routes->get('/datajur', 'JurusanController::index');
$routes->get('/datajur/tambah', 'JurusanController::tambah');
$routes->post('/datajur/store', 'JurusanController::store');
$routes->get('datajur/(:any)/edit', [JurusanController::class, 'edit']);
$routes->put('datajur/(:any)', [JurusanController::class, 'update']);
$routes->delete('datajur/(:any)', [JurusanController::class, 'hapus']);


$routes->get('/landing', 'Home::index2');
//beswan
$routes->get('/beswan', 'Home::beswan');
$routes->get('/profil', 'Home::profil');
$routes->get('/listbea', 'Home::listbea');
$routes->get('/donbes', 'Home::donbes');
$routes->get('/penglu', 'Home::penglu');