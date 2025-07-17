<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/penghuni', 'Penghuni::index');
$routes->get('/penghuni/create', 'Penghuni::create');
$routes->post('/penghuni/store', 'Penghuni::store');
$routes->get('/penghuni/edit/(:num)', 'Penghuni::edit/$1');
$routes->post('/penghuni/update/(:num)', 'Penghuni::update/$1');
$routes->get('/penghuni/delete/(:num)', 'Penghuni::delete/$1');
