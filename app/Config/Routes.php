<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('clientes', static function ($routes) {
    $routes->get('/','ClienteController::listado');
    $routes->delete('delete/(:num)', 'ClienteController::delete/$1'); //borrar los clientes   
    $routes->get('nuevo', 'ClienteController::crear'); // crear un nuevo cliente
    $routes->post('guardar', 'ClienteController::guardar');
    $routes->get('editar/(:num)', 'ClienteController::editar/$1');  //editar a un cliente
    $routes->post('actualizar/(:num)', 'ClienteController::actualizar/$1');
    $routes->get('buscar', 'ClienteController::buscar');
});

$routes->group('dispositivos', static function($routes) {

    $routes->get('nuevo', 'DispositivoController::crear');
    $routes->get('obtenerClientes', 'DispositivoController::obtenerClientes');
    $routes->get('obtenerNombreClientePorCedula', 'DispositivoController::obtenerNombreClientePorCedula');
    $routes->post('guardar', 'DispositivoController::registrarDispositivo');
});

$routes->group('Ordenes', static function($routes) {
    $routes->get('/','OrdenController::listado');
});
