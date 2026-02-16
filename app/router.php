<?php

$routes = [
    '' => 'home',
    'home' => 'home',
    'login' => 'login',
    'register' => 'register',
    'dashboard' => 'dashboard'
];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// remove project folder
$uri = str_replace('/school_management', '', $uri);

// remove public if exists
$uri = str_replace('/public', '', $uri);

$uri = trim($uri, '/');


if (array_key_exists($uri, $routes)) {
    require __DIR__ . '/views/' . $routes[$uri] . '.php';
} else {
    http_response_code(404);
    require __DIR__ . '/views/404.php';
}