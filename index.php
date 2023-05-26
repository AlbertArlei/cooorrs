<?php

require "./src/router/router.php";

$router = new Router();

$router->addRoute('GET', '/', function() {
    include('./src/page/home.php');
});

$router->addRoute('GET', '/services', function() {
    include('./src/page/service.php');
});

$router->addRoute('GET', '/about', function() {
    include('./src/page/about.php');
});

$router->addRoute('GET', '/border', function() {
    include('./src/service/border.php');
});

$router->addRoute('GET', '/flexbox', function() {
    include('./src/service/flexbox.php');
});

$router->addRoute('GET', '/login', function() {
    include('./src/service/login.php');
});

$router->addRoute('GET', '/con', function() {
    include('./src/connect.php');
});

$router->run($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);