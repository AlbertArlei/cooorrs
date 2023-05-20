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

$router->addRoute('GET', '/login', function() {
    include('./src/pages/perfil');
});

$router->run($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
?>