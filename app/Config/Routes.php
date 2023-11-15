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

$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/landing', 'Home::index2');
$routes->get('/beswan', 'Home::beswan');

