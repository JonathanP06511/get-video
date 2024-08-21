<?php
$port = 3004;

if (php_sapi_name() === 'cli-server') {
    require_once __DIR__ . '/src/Router/Router.php';

    $router = new Router();
    $router->dispatch($_SERVER['REQUEST_URI']);
} else {
    $currentDir = realpath(__DIR__);

    if ($currentDir === false) {
        echo "Error: El directorio no existe o no es accesible.";
        exit(1);
    }

    echo "Iniciando el servidor en http://localhost:$port\n";
    $command = "php -S localhost:$port -t " . escapeshellarg($currentDir);
    exec($command);
}

