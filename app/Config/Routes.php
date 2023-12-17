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

// LANDING PAGE, REGISTER, LOGIN
$routes->get('/', 'Home::index');
$routes->get('/regist', 'Home::regist');
$routes->post('/register/store', [LoginController::class, 'store']);
$routes->get('/loginpage', [LoginController::class, 'index']);

// DONATUR
$routes->get('/donatur', 'Home::dashboard_donatur');
// PROFILE DONATUR
$routes->get('/profile', 'DonaturController::profile');
$routes->get('/tambah_profile', 'DonaturController::create');
$routes->post('/simpan_profile', 'DonaturController::save');
$routes->get('/edit_profile', 'DonaturController::edit');
$routes->post('/perbaru_profile', 'DonaturController::update');
// CRUD PROGRAM BEASISWA
$routes->get('/program', 'Home::program');

$routes->get('/detail_program/(:any)', 'ProgramController::detail/$1');
$routes->get('/tambah_program', 'ProgramController::create');
$routes->post('/simpan_program', 'ProgramController::save');
$routes->get('/edit_program/(:any)', 'Home::editprogbes/$1');
$routes->post('/edit_program/(:any)', 'Home::editprogbes/$1');
$routes->post('/perbaru_program', 'Home::editprogbes/$1');
$routes->get('/hapus_program/(:any)', 'ProgramController::destroy/$1');
// PENDAFTAR
$routes->get('/pendaftar', 'Home::pendaftar');
$routes->get('/penerimaan/(:any)', 'Home::penerimaan/$1');
$routes->post('/penerimaan/(:any)', 'Home::penerimaan/$1');
// PENERIMA
$routes->get('/penerima', 'Home::penerima');
$routes->get('/detail_penerima/(:any)', 'Home::detail_penerima/$1');
// LAPORAN
$routes->get('/laporan2', 'Home::laporan2');
$routes->get('/detail_laporan', 'Home::detail_laporan');

// ADMIN
$routes->get('/dashboard', 'AkunController::index');
// LOKASI
$routes->get('/datalokasi', 'LokasiController::index');
$routes->get('/datalokasi/tambah', 'LokasiController::tambah_lokasi');
$routes->post('/datalokasi/store', 'LokasiController::store');
$routes->get('datalokasi/(:any)/edit', [LokasiController::class, 'edit']);
$routes->put('datalokasi/(:any)', [LokasiController::class, 'update']);
$routes->delete('datalokasi/(:any)', [LokasiController::class, 'hapus']);
// UNIVERSITAS
$routes->get('/datauniv', 'UniversitasController::index');
$routes->get('/datauniv/tambah', 'UniversitasController::tambah');
$routes->post('/datauniv/store', 'UniversitasController::store');
$routes->get('datauniv/(:any)/edit', [UniversitasController::class, 'edit']);
$routes->put('datauniv/(:any)', [UniversitasController::class, 'update']);
$routes->delete('datauniv/(:any)', [UniversitasController::class, 'hapus']);
// FAKULTAS
$routes->get('/datafak', 'FakultasController::index');
$routes->get('/datafak/tambah', 'FakultasController::tambah');
$routes->post('/datafak/store', 'FakultasController::store');
$routes->get('datafak/(:any)/edit', [FakultasController::class, 'edit']);
$routes->put('datafak/(:any)', [FakultasController::class, 'update']);
$routes->delete('datafak/(:any)', [FakultasController::class, 'hapus']);
// JURUSAN
$routes->get('/datajur', 'JurusanController::index');
$routes->get('/datajur/tambah', 'JurusanController::tambah');
$routes->post('/datajur/store', 'JurusanController::store');
$routes->get('datajur/(:any)/edit', [JurusanController::class, 'edit']);
$routes->put('datajur/(:any)', [JurusanController::class, 'update']);
$routes->delete('datajur/(:any)', [JurusanController::class, 'hapus']);
// PROGRAM 
$routes->get('/programbeasiswa', 'Home::programbeasiswa');
$routes->get('/programbeasiswa/detail/(:any)', 'Home::detail_programbeasiswa/$1');
// DONATUR
$routes->get('/daftardonatur', 'AdminController::index');
$routes->get('/detail_daftardonatur', 'AdminController::lihat');
// AKUN 
$routes->get('/akun', 'AkunController::akun');

// BESWAN
$routes->get('/beswan', 'Home::beswan');
// PROFILE BESWAN
$routes->get('/profil', 'BeswanController::profile');
$routes->get('/tambah_profil', 'BeswanController::create');
$routes->post('/simpan_profil', 'BeswanController::save');
$routes->get('/edit_profil', 'BeswanController::edit');
$routes->post('/perbaru_profil', 'BeswanController::update');
// PROGRAM
$routes->get('/daftarprogram', 'Home::daftarprogram');
$routes->get('/lihat_program/(:any)', 'Home::lihat_program/$1');
$routes->get('/mendaftar/(:any)', 'Home::mendaftar/$1');
$routes->post('/mendaftar/(:any)', 'Home::mendaftar/$1');
// STATUS PENDAFTARAN
$routes->get('/pendaftaran', 'Home::pendaftaran');
$routes->get('/edit_pendaftaran/(:any)', 'Home::edit_pendaftaran/$1');
// LAPORAN PENGELUARAN
$routes->get('/laporan_pengeluaran', 'Home::pengeluaran');
$routes->get('/tambah_laporan', 'Home::tambah_laporan');
$routes->post('/tambah_laporan', 'Home::tambah_laporan');
$routes->get('edit_laporan/(:any)', 'Home::edit_laporan/$1');
$routes->get('delete_laporan/(:any)', 'Home::delete_laporan/$1');
$routes->get('/lihat_laporan/(:any)', 'Home::lihat_laporan/$1');