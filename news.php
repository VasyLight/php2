<?php

require __DIR__ . '/autoload.php';

 $controller = new \App\Controllers\News();

 $url = $_SERVER['REQUEST_URI'];
var_dump($url);

 $controller->action('Index');

