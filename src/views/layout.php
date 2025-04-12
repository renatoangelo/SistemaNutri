<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SistemaNutri</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div style="display: flex; min-height: 100vh;">
        <!-- Sidebar -->
        <aside style="width: 250px; background-color: var(--terra); padding: 20px; display: flex; flex-direction: column; align-items: center;">
            <img src="/assets/img/logo.png" alt="Logo SistemaNutri" style="width: 100%; max-width: 200px; margin-bottom: 20px;">
            <nav style="width: 100%;">
                <ul style="list-style: none; padding: 0;">
                    <li><a href="/dashboard" style="display: block; padding: 10px; color: var(--bordo-escuro); text-decoration: none; font-weight: bold;">Dashboard</a></li>
                    <li><a href="#" style="display: block; padding: 10px; color: var(--bordo-escuro); text-decoration: none;">Pacientes</a></li>
                    <li><a href="#" style="display: block; padding: 10px; color: var(--bordo-escuro); text-decoration: none;">Usuários</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Conteúdo principal -->
        <main style="flex: 1; background-color: var(--terra-fundo); padding: 20px;">
            <!-- Topbar -->
            <header style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h1 style="margin: 0; color: var(--bordo-escuro);">SistemaNutri</h1>
                <form action="/login/logout" method="POST">
                    <button style="padding: 8px 16px; background-color: var(--bordo); color: #fff; border: none; border-radius: 4px; cursor: pointer;">Sair</button>
                </form>
            </header>

            <!-- Aqui vai o conteúdo dinâmico -->
            <div>
                <?php if (isset($content)) echo $content; ?>
            </div>
        </main>
    </div>
</body>
</html>
