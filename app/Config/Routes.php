<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');


//$routes->get('/', 'Home::index',['filter' => 'permission:back-office']);
$routes->get('/', 'Dashboard::index',['filter' => 'permission:back-office']);

//$routes->get('/dashboard', 'Dashboard::index',['filter' => 'permission:back-office']);

