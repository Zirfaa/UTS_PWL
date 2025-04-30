<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index',['filter' => 'auth']);
$routes->get('/dashboard', 'Home::dashboard',['filter' => 'auth']);
$routes->get('produk', 'DasboardController::produk',['filter' => 'auth']);

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('auth/generatepassword', 'AuthController::generatepassword');
$routes->get('auth/genpass', 'AuthController::genpass');