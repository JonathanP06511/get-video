<?php

class Router {
    public function dispatch($uri) {
        if ($uri === '/video') {
            require_once __DIR__ . '/../Controllers/VideoController.php';
            $controller = new VideoController();
            $controller->serveVideo();
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "Page not found";
        }
    }
}
