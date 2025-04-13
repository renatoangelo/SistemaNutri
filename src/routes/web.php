<?php

use App\Controllers\LoginController;
use App\Controllers\DashboardController;
use App\Controllers\UserController;

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
    $controller = new DashboardController();
    $controller->index();
    exit;
}

// Verifica se a URL começa com "usuarios"
if (str_starts_with($url, 'usuarios')) {
    $db = require __DIR__ . '/../config/database.php'; // conexão com PDO
    $controller = new UserController($db);

    if ($url === 'usuarios') {
        $controller->index();
    } elseif ($url === 'usuarios/novo') {
        $controller->create();
    } elseif ($url === 'usuarios/salvar' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->store();
    } elseif (preg_match('/^usuarios\\/editar\\/(\\d+)$/', $url, $matches)) {
        $controller->edit($matches[1]);
    } elseif (preg_match('/^usuarios\\/atualizar\\/(\\d+)$/', $url, $matches) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->update($matches[1]);
    } elseif (preg_match('/^usuarios\\/excluir\\/(\\d+)$/', $url, $matches)) {
        $controller->delete($matches[1]);
    } else {
        echo "Erro 404: Página de usuário não encontrada!";
    }
    exit;
}




// Rota padrão (404)
echo "Erro 404: Página não encontrada!";

?>
