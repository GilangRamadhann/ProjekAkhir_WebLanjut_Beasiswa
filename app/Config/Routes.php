<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\LoginController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/regist', 'Home::regist');
$routes->get('/regist/donatur', 'Home::regist_donatur');
$routes->get('/login', [LoginController::class, 'index']);
$routes->get('/landing', 'Home::index2');
