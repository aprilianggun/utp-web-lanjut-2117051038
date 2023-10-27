<?php

use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
#$routes->get('/profile','Home::profile');
$routes->get('/profile/(:any)/(:any)/(:any)', 'UserController::profile/$1/$2/$3');

# create
$routes->get('/user/create', 'UserController::create');
#$routes->post('/user/store', 'UserController::store');
$routes->post('/user/store', 'UserController::store');