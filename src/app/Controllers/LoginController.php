<?php

namespace App\Controllers;

use PDO;

class LoginController {
    public function index() {
        require_once __DIR__ . '/../../views/login/index.php';
    }

    public function authenticate() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    
        // Conexão com banco
        $db = require __DIR__ . '/../../config/database.php';
    
        $email = $_POST['username'] ?? ''; // Campo ainda chama "username" no HTML
        $password = $_POST['password'] ?? '';
        $remember = isset($_POST['remember']);
    
        // Consulta segura ao banco (prevenção contra SQL Injection)
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['name']; // Aqui você pode salvar mais dados se quiser
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_role'] = $user['role'];
    
            if ($remember) {
                setcookie('remember_username', $email, time() + (60 * 60 * 24 * 30), '/');
            } else {
                setcookie('remember_username', '', time() - 3600, '/');
            }
    
            header('Location: /dashboard');
            exit;
        } else {
            $_SESSION['login_error'] = 'E-mail ou senha inválidos!';
            header('Location: /login');
            exit;
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
