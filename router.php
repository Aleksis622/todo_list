<?php
$requestUri = $_SERVER["REQUEST_URI"];
if (str_starts_with($requestUri, '/todo_list/public/')) {
    return false;
}
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$baseFolder = '/todo_list';
if (strpos($uri, $baseFolder) === 0) {
    $uri = substr($uri, strlen($baseFolder));
}

$uri = rtrim($uri, '/');
if ($uri === '') $uri = '/';

$routes = require __DIR__ . '/routes.php';

if (isset($routes[$uri])) {
    require __DIR__ . '/' . $routes[$uri];
} else {
    header("Location: /todo_list/");
    exit();
}
