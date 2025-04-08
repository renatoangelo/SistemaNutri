<?php

// Função para carregar o controlador com base na URL
function loadController($controllerName, $action = 'index') {
    $controllerClass = 'App\\Controllers\\' . ucfirst($controllerName) . 'Controller';
    if (class_exists($controllerClass)) {
        $controller = new $controllerClass();
        if (method_exists($controller, $action)) {
            $controller->$action();
            return;
        }
    }
    echo "Erro 404: Página não encontrada!";
}

// Verifica a URL e carrega o controlador adequado
$url = $_GET['url'] ?? 'home/index';
$parts = explode('/', $url);

$controllerName = $parts[0];
$action = $parts[1] ?? 'index';

loadController($controllerName, $action);
?>
