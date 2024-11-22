<?php

// Chargement du système d'autoload
require_once '../vendor/autoload.php';

use MiladRahimi\PhpRouter\Router;

$router = Router::create();

$router->get('/', function () {
    return 'Bonjour accueil';
});
$router->get('/contact', function () {
    return 'Bonjour page de contact';
});

$router->dispatch();