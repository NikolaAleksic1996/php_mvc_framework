<?php

require_once __DIR__ . '/vendor/autoload.php';

use app\core\Application;

$app = new Application();


$app->router->get('/', function () use ($app) {
   return 'Hello World!';
});

$app->router->get('/contact', function () use ($app) {
    return 'Contact page!';
});

$app->run();