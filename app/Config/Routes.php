<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'CarroControler::index');

$routes->get('/abacaxis', 'Home::pagina');

$routes->get('/cr7', 'Home::goat');

$routes->get('/vitrine', "Home::vercarros");

$routes->get('/teste', 'Home::teste');
