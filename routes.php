<?php

use App\Controllers\ClientesController;

$routes = [
    '/clientes' => [
        'get' => [ClientesController::class, 'index'],
        'post' => [ClientesController::class, 'store'],
    ],
    '/clientes/import' => [
        'post' => [ClientesController::class, 'import'],
    ],
];

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

$method = strtolower($_SERVER['REQUEST_METHOD'] ?? 'GET');

$route_info = $routes[$uri][$method] ?? null;

if (!$route_info)
{
    die("404");
}

if($route_info && (!is_array($route_info) || !count($route_info) === 2))
{
    throw new \Exception("Invalid route", 1);
}

$class  = $route_info[0];
$method = $route_info[1];

$instance = new $class();
$instance->{$method}();
die();
