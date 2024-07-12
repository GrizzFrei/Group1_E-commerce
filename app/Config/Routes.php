<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('contact', 'Home::contacts');

$routes->get('about', 'Home::about');

$routes->get('login', 'Home::login');

$routes->get('signup', 'Home::signup');

$routes->get('allProducts', 'Home::allProducts');

$routes->get('cart', 'Home::cart');

$routes->get('checkout', 'Home::checkout');

$routes->get('getProduct/(:any)', 'Home::getProduct/$1');
