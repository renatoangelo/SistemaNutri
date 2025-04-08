<?php

// Função para iniciar a sessão de forma segura
function startSession() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

// Iniciar a sessão apenas se não estiver ativa
startSession();

require_once __DIR__ . '/../vendor/autoload.php';

// Definir a constante da raiz do projeto
define('ROOT', dirname(__DIR__) . '/');

// Capturar a URL da requisição
$url = $_SERVER['REQUEST_URI'];
$url = trim($url, '/');

// Remover parâmetros de query string
if (strpos($url, '?') !== false) {
    $url = strstr($url, '?', true);
}

// Carregar as rotas
require_once ROOT . 'routes/web.php';
?>
