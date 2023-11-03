<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/regist', 'Home::regist');
$routes->get('/regist/donatur', 'Home::regist_donatur');
