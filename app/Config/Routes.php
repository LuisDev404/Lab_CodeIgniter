<?php

//Aqui onde criamos uma rota para o controller.

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/Hello', 'Home::Hello');
$routes->get('/Teste', 'Home::Teste');
