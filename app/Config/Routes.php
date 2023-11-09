<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\LoginController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/regist', 'Home::regist');
$routes->get('/regist/donatur', 'Home::regist_donatur');

// Login untuk semua user
$routes->get('/login', [LoginController::class, 'index']);
$routes->post('/checkLogin', [LoginController::class, 'checkLogin']);

$routes->get('/landing', 'Home::index2');
$routes->get('/beswan', 'Home::beswan');
