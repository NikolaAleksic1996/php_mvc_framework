<?php


use app\core\Application;

$app = new Application();


$app->router->get('/', function () use ($app) {
   return 'Hello World!';
});

$app->run();