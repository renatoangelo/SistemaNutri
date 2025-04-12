<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SistemaNutri</title>
    <link rel="stylesheet" href="/assets/css/style.css">
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
                    <li><a href="#">Pacientes</a></li>
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