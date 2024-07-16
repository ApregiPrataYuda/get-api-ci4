<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->group('api', function($routes) {
    $routes->resource('users');
});

$routes->get('Accessapi', 'Accessapi::index');