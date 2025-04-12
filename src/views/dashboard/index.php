<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - SistemaNutri</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Olá, <?= htmlspecialchars($_SESSION['user']) ?>!</h2>
        <p>Bem-vindo ao painel do SistemaNutri.</p>
        <form method="POST" action="/login/logout">
            <button type="submit">Sair</button>
        </form>
    </div>
</body>
</html>
