<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(APPPATH . 'Config/Routes.php')) {
    require APPPATH . 'Config/Routes.php';
}

// Define routes for the Rental controller
$routes->get('rental', 'Rental::index');
$routes->get('rental/create', 'Rental::create');
$routes->post('rental/store', 'Rental::store');
$routes->get('rental/edit/(:num)', 'Rental::edit/$1');
$routes->post('rental/update', 'Rental::update');
$routes->get('rental/delete/(:num)', 'Rental::delete/$1');

// The default route (optional, depending on your application needs)
$routes->get('/', 'Rental::index');
