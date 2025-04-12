<?php

namespace App\Controllers;

class LoginController {
    public function index() {
        require_once __DIR__ . '/../../views/login/index.php';
    }

    public function authenticate() {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // Autenticação simples (apenas para teste)
        if ($username === 'admin' && $password === '1234') {
            $_SESSION['user'] = $username;
            header('Location: /dashboard');
            exit;
        } else {
            echo "Usuário ou senha inválidos!";
        }
    }

    public function logout() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    
        session_unset(); // Remove todas as variáveis da sessão
        session_destroy(); // Destroi a sessão
    
        header('Location: /login');
        exit;
    }
    
}
?>
