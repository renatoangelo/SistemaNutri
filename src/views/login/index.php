<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - SistemaNutri</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Login - SistemaNutri</h2>
        <form method="POST" action="/login/authenticate">
            <label for="username">Usuário:</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>