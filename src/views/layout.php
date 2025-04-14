<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SistemaNutri</title>

    <?php
    $rotaAtual = $_SERVER['REQUEST_URI'];
    ?>

    <!-- CSS principal -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- CSS específico para pacientes -->
    <?php if (str_starts_with($rotaAtual, '/pacientes')): ?>
        <link rel="stylesheet" href="/assets/css/pacientes.css">
    <?php endif; ?>

    <!-- CSS específico para usuários -->
    <?php if (str_starts_with($rotaAtual, '/usuarios')): ?>
        <link rel="stylesheet" href="/assets/css/usuarios.css">
    <?php endif; ?>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <img src="/assets/img/logo.png" alt="Logo SistemaNutri">
            <h2>SistemaNutri</h2>
            <nav>
                <ul>
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/usuarios">Usuários</a></li>
                    <li><a href="/pacientes">Pacientes</a></li>
                </ul>
            </nav>
            <a href="/login/logout"><button>Sair</button></a>
        </div>
        <div class="main-content">
            <?= $content ?>
        </div>
    </div>
</body>
</html>