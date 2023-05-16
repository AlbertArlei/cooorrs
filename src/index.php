<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - </title>
</head>
<body>
<?php

require "./router/router.php";

$router = new Router();

$router->addRoute('GET', '/', function() {
    include('./pages/home.php');
});

$router->addRoute('GET', '/services', function() {
    include('./pages/services.php');
});

$router->addRoute('GET', '/about', function() {
    include('./pages/about');
});

$router->addRoute('GET', '/about', function() {
    include('./pages/about');
});

$router->addRoute('GET', '/login', function() {
    include('./pages/about');
});

$router->addRoute('GET', '/about', function() {
    include('./pages/about');
});

$router->addRoute('GET', '/about', function() {
    include('./pages/about');
});

$router->run($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
?>
</body>
</html>