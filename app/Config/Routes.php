<?php

//Aqui onde criamos uma rota para o controller.

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

//Isso são rotas simples
$routes->get('/', 'Home::index');
$routes->get('/Hello', 'Home::Hello');
$routes->get('/Teste', 'Home::Teste');

//Rotas com parâmetros.
$routes->get('/usuario/(:num)', 'Home::usuario/$1');
