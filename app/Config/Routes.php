<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\LoginController;

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
$routes->get('/editprogbes', 'Home::editprogbes');



//admin
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/daftardonatur', 'Home::daftardonatur');
$routes->get('/daftardonatur/detail', 'Home::detail_daftardonatur');
$routes->get('/programbeasiswa', 'Home::programbeasiswa');
$routes->get('/programbeasiswa/detail', 'Home::detail_programbeasiswa');
$routes->get('/penerimabeasiswa', 'Home::penerimabeasiswa');
$routes->get('/penerimabeasiswa/detail', 'Home::detail_penerimabeasiswa');
$routes->get('/dataakademik', 'Home::dataakademik');
$routes->get('/pengeluaran', 'Home::pengeluaran');
$routes->get('/pengeluaran/detail', 'Home::detail_pengeluaran');

$routes->get('/landing', 'Home::index2');
//beswan
$routes->get('/beswan', 'Home::beswan');
$routes->get('/profil', 'Home::profil');
$routes->get('/listbea', 'Home::listbea');
$routes->get('/donbes', 'Home::donbes');
$routes->get('/penglu', 'Home::penglu');