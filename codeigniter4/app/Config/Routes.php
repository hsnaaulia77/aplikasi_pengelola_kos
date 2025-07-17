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
$routes->get('/barang', 'Barang::index');
$routes->get('/barang/create', 'Barang::create');
$routes->post('/barang/store', 'Barang::store');
$routes->get('/barang/edit/(:num)', 'Barang::edit/$1');
$routes->post('/barang/update/(:num)', 'Barang::update/$1');
$routes->get('/barang/delete/(:num)', 'Barang::delete/$1');
$routes->get('/relasi', 'KmrPenghuni::index');
$routes->get('/relasi/create', 'KmrPenghuni::create');
$routes->post('/relasi/store', 'KmrPenghuni::store');
$routes->get('/relasi/edit/(:num)', 'KmrPenghuni::edit/$1');
$routes->post('/relasi/update/(:num)', 'KmrPenghuni::update/$1');
$routes->get('/relasi/delete/(:num)', 'KmrPenghuni::delete/$1');
