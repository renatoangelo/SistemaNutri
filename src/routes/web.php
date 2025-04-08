<?php

use App\Controllers\LoginController;

// Remover a barra inicial da URL, se houver
$url = ltrim($url, '/');

// Rota para a página inicial (raiz)
if ($url === '' || $url === '/') {
    header('Location: /login');
    exit;
}

// Rota para a página de login
if ($url === 'login' || $url === 'login/index') {
    $controller = new LoginController();
    $controller->index();
    exit;
}

// Rota para autenticação
if ($url === 'login/authenticate') {
    $controller = new LoginController();
    $controller->authenticate();
    exit;
}

// Rota para logout
if ($url === 'login/logout') {
    $controller = new LoginController();
    $controller->logout();
    exit;
}

// Rota para o dashboard
if ($url === 'dashboard') {
    echo "Bem-vindo ao Dashboard!";
    exit;
}

// Rota padrão (404)
echo "Erro 404: Página não encontrada!";
?>
