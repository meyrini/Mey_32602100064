<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// app/Config/Routes.php
$routes->get('/', 'Pages::home');
$routes->get('/profile', 'Pages::profile');
$routes->get('/skills', 'Pages::skills');
$routes->get('/layouting', 'Layouts::index');

// Crud
$routes->get('/crud', 'Crud::index');
$routes->get('/crud/tambah', 'Crud::tambah');
$routes->post('/crud/tambah', 'Crud::tambah');
$routes->get('/crud/hapus/(:segment)', 'Crud::hapus/$1');
$routes->get('/crud/edit/(:segment)', 'Crud::edit/$1');
$routes->post('/crud/editan', 'Crud::editan');




