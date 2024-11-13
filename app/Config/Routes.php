<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/**
 * API Routes
 */
$routes->get('/test', 'AuthController::testAPI');
$routes->post('/login', 'AuthController::login');
