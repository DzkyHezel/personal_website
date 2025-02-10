<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); //dashboard
$routes->get('about-dzkyhzl', 'Home::about'); //about me
// $routes->get('dzkyhzl-artworks', 'Home::artworks'); //artworks
$routes->match(['get', 'post'], 'dzkyhzl-artworks', 'Home::artworks');
$routes->get('dzkyhzl-commission', 'Home::commission'); //commission

// $routes->get('artworks', 'Home::artworks'); //all artworks

// $routes->get('comms', 'Home::comms'); //commission


