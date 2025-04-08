<?php
session_start();

// Definir a constante da raiz do projeto
define('ROOT', dirname(__DIR__) . '/');

// Carregar o autoload do Composer
require_once ROOT . '../vendor/autoload.php';

// Teste direto do controlador
use App\Controllers\HomeController;

$home = new HomeController();
$home->index();
?>
