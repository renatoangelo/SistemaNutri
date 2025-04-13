<?php

namespace App\Controllers;

class LoginController {
    public function index() {
        require_once __DIR__ . '/../../views/login/index.php';
    }

    public function authenticate() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        $remember = isset($_POST['remember']);

        // Autenticação simples (apenas para teste)
        if ($username === 'admin' && $password === '1234') {
            $_SESSION['user'] = $username;

            // Se marcou "lembrar de mim", salvar o cookie por 30 dias
            if ($remember) {
                setcookie('remember_username', $username, time() + (60 * 60 * 24 * 30), '/');
            } else {
                setcookie('remember_username', '', time() - 3600, '/'); // Remove o cookie
            }
            
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
