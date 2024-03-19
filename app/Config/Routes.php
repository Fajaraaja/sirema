<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
// Set auto route change to true
$routes->setAutoRoute(true);
$routes->get('/mahasiswa/create', 'Mahasiswa::create');
