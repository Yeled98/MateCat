<?php
use Klein\Klein;
require_once __DIR__ . '/lib/Bootstrap.php';
Bootstrap::start();
$klein = new Klein();

function route(string $path, string $method, array $callback): void {
    global $klein;
    $klein->respond($method, $path, function () use ($callback) {
        $reflect = new ReflectionClass($callback[0]);
        $instance = $reflect->newInstanceArgs(func_get_args());
        $instance->respond($callback[1]);
    });
}

// Rutas nativas de Matecat
require_once __DIR__ . '/lib/Routes/oauth_routes.php';
require_once __DIR__ . '/lib/Routes/view_routes.php';
require_once __DIR__ . '/lib/Routes/app_routes.php';
require_once __DIR__ . '/lib/Routes/api_v2_routes.php';
require_once __DIR__ . '/lib/Routes/api_v3_routes.php';

$klein->dispatch();
