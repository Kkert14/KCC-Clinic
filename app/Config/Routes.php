<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::index');
$routes->get('/login', 'Auth::index');
$routes->post('/auth', 'Auth::auth');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/logout', 'Auth::logout');

// User Acounts routes

$routes->get('/users', 'Users::index');
$routes->post('users/save', 'Users::save');
$routes->get('users/edit/(:segment)', 'Users::edit/$1');
$routes->post('users/update', 'Users::update');
$routes->delete('users/delete/(:num)', 'Users::delete/$1');
$routes->post('users/fetchRecords', 'Users::fetchRecords');

// Records routes

$routes->get('/records', 'Records::index');
$routes->post('records/save', 'Records::save');
$routes->get('records/edit/(:segment)', 'Records::edit/$1');
$routes->post('records/update', 'Records::update');
$routes->delete('records/delete/(:num)', 'Records::delete/$1');
$routes->post('records/fetchRecords', 'Records::fetchRecords');

// Logs routes for admin
$routes->get('/log', 'Logs::log');