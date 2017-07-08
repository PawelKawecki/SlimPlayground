<?php

namespace Tasks;

class DevTasks
{
    public static function startDevelopmentWebServer($event) {
        $port = 8000;
        echo exec('php -S localhost:'. $port .' -t public public/index.php');
    }
}