<?php

require "./router/router.php";

$router = new Router();

$router->addRoute('GET', '/', function() {
    include('./page/home.php');
});

$router->addRoute('GET', '/service', function() {
    include('./page/service.php');
});

$router->addRoute('GET', '/about', function() {
    include('./page/about');
});

$router->addRoute('GET', '/border', function() {
    include('./page/border.php');
});

$router->addRoute('GET', '/login', function() {
    include('./pages/perfil');
});

$router->run($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
?>