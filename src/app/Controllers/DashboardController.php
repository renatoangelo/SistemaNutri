<?php

namespace App\Controllers;

class DashboardController {
    public function index() {
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }

        require_once __DIR__ . '/../../views/dashboard/index.php';
    }
}
