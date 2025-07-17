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
$routes->get('/kamar', 'Kamar::index');
$routes->get('/kamar/create', 'Kamar::create');
$routes->post('/kamar/store', 'Kamar::store');
$routes->get('/kamar/edit/(:num)', 'Kamar::edit/$1');
$routes->post('/kamar/update/(:num)', 'Kamar::update/$1');
$routes->get('/kamar/delete/(:num)', 'Kamar::delete/$1');
