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
$routes->get('/tagihan', 'Tagihan::index');
$routes->get('/tagihan/create', 'Tagihan::create');
$routes->post('/tagihan/store', 'Tagihan::store');
$routes->get('/tagihan/edit/(:num)', 'Tagihan::edit/$1');
$routes->post('/tagihan/update/(:num)', 'Tagihan::update/$1');
$routes->get('/tagihan/delete/(:num)', 'Tagihan::delete/$1');
$routes->get('/bayar', 'Bayar::index');
$routes->get('/bayar/create', 'Bayar::create');
$routes->post('/bayar/store', 'Bayar::store');
$routes->get('/bayar/edit/(:num)', 'Bayar::edit/$1');
$routes->post('/bayar/update/(:num)', 'Bayar::update/$1');
$routes->get('/bayar/delete/(:num)', 'Bayar::delete/$1');
