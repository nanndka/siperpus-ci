<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Buku::index');
$routes->get('buku', 'Buku::index');
$routes->get('buku/tambah', 'Buku::tambah');
$routes->post('buku/simpan', 'Buku::simpan');
$routes->get('buku/edit/(:num)', 'Buku::edit/$1');
$routes->post('buku/update/(:num)', 'Buku::update/$1');
$routes->post('buku/hapus/(:num)', 'Buku::hapus/$1');
