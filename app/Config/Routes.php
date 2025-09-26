<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', function() {
	return redirect()->to('/produtos');
});

$routes->get('produtos', 'Produtos::index');
$routes->get('produtos/create', 'Produtos::create');
$routes->post('produtos/store', 'Produtos::store');
$routes->get('produtos/edit/(:num)', 'Produtos::edit/$1');
$routes->post('produtos/update/(:num)', 'Produtos::update/$1');
$routes->post('produtos/delete/(:num)', 'Produtos::delete/$1');
