<?php

class VideoController {
    public function serveVideo() {
        $videoPath = realpath(__DIR__ . '/../../public/videos/example.mp4');
        if (file_exists($videoPath)) {
            header('Content-Type: video/mp4');
            header('Content-Length: ' . filesize($videoPath));
            readfile($videoPath);
            exit;
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "Video not found";
        }
    }
}
