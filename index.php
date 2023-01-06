<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use Alfred\Todo\Framework\DiContainer;
use Alfred\Todo\Framework\Router;

require_once './vendor/autoload.php';

// Load custom DI container.
$container = new DiContainer();
$container->loadDependencies();

// Use custom Router.
$requestUri = str_replace('/todo', '', $_SERVER['REQUEST_URI']);
$router = $container->get(Router::class);
$router->process($requestUri, $_POST);