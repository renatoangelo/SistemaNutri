<?php
// views/login/index.php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SistemaNutri</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="login-container">
        <div class="login-image"></div>

        <div class="login-form">
            <h2>ACESSO AO SISTEMA</h2>
            <form method="POST" action="/login/authenticate">
                <label for="username">Usuário</label>
                <input type="text" id="username" name="username" value="<?= isset($_COOKIE['remember_username']) ? htmlspecialchars($_COOKIE['remember_username']) : '' ?>" required>


                <label for="password">Senha</label>
                <div class="password-wrapper">
                    <input type="password" id="password" name="password" required>
                    <i class="fas fa-eye toggle-password" onclick="togglePassword()"></i>
                </div>

                <div class="remember-box">
                    <input type="checkbox" id="remember" name="remember" <?= isset($_COOKIE['remember_username']) ? 'checked' : '' ?>>
                    <label for="remember">Lembrar de mim</label>
                </div>

                <button type="submit">Entrar</button>
            </form>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            const toggleIcon = document.querySelector(".toggle-password");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>
</html>
