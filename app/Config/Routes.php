<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/cadastro', 'Cadastro::index');
$routes->post('/cadastro_store', 'Cadastro::store');
$routes->get('/buscar', 'Buscar::index');
$routes->get('/login', 'Login::index');
$routes->post('/login_store', 'Login::login_store');
$routes->get('/home_login', 'Home_Login::index');
$routes->get('/cadastro_status', 'Cadastro_Status::index');
$routes->post('/cadastro_status_store', 'Cadastro_Status::store');


