<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/list', 'Home::list');
$routes->get('/daftar', 'Home::insert');
$routes->post('/save', 'Home::save');