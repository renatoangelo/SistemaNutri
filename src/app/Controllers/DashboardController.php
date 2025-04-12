<?php
namespace App\Controllers;

class DashboardController
{
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
    }

    public function index()
    {
        // Captura o conteúdo da view específica do dashboard
        ob_start();
        require __DIR__ . '/../../views/dashboard/index.php';
        $content = ob_get_clean();

        // Injeta o conteúdo dentro do layout principal
        require __DIR__ . '/../../views/layout.php';
    }
}
