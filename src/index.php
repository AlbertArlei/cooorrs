<?php

require "./router/router.php";

$router = new Router();

$router->addRoute('GET', '/', function() {
     include('./pages/a.php');
});

$router->addRoute('GET', '/about', function() {
    echo "Sobre nós";
});

$router->addRoute('GET', '/contact', function() {
    echo "Entre em contato conosco";
});

$router->run($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);