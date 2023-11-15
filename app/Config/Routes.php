<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\LoginController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/regist', 'Home::regist');


// Login untuk semua user
 $routes->get('/loginpage', [LoginController::class, 'index']);
// $routes->post('/checkLogin', [LoginController::class, 'checkLogin']);

$routes->get('/landing', 'Home::index2');
