<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\LoginController;

/**
 * @var RouteCollection $routes
 */

// Landing Page
$routes->get('/', 'Home::index');

// Register
$routes->get('/register', 'Home::regist');
$routes->post('/register/store', [LoginController::class, 'store']);

// Login untuk semua user
$routes->get('/login', [LoginController::class, 'index']);
$routes->post('/login/checkLogin', [LoginController::class, 'checkLogin']);

$routes->get('/dashboard', 'Home::dashboard');
