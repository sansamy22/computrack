<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); 

$routes->get('/clientes', 'clienteController::listado'); 

$routes->post('cliente/delete/(:num)', 'ClienteController::delete/$1'); 

$routes->get('/clientes/nuevo', 'clienteController::crear'); 

$routes->post('clientes/guardar', 'ClienteController::guardar');
