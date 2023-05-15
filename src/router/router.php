<?php

class Router
{
    private $routes = [];

    public function addRoute($method, $path, $callback)
    {
        $this->routes[$method][$path] = $callback;
    }

    public function run($method, $uri)
    {
        if (!isset($this->routes[$method])) {
            http_response_code(405);
            echo "Método não permitido";
            return;
        }

        foreach ($this->routes[$method] as $path => $callback) {
            if ($uri === $path) {
                $callback();
                return;
            }
        }

        http_response_code(404);
        echo "Página não encontrada";
    }
}