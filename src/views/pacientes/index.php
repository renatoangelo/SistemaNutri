<?php
// views/pacientes/index.php
?>
<div class="container">

<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<?php if (isset($_SESSION['success_message'])): ?>
    
    <div class="success-message">
        <?= $_SESSION['success_message'] ?>
        <?php unset($_SESSION['success_message']); ?>
    </div>

<?php endif; ?>


    <h2>Lista de Pacientes</h2>
    <a href="/pacientes/novo">
        <button>Novo Paciente</button>
    </a>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($pacientes) && is_array($pacientes)): ?>
                <?php foreach ($pacientes as $paciente): ?>
                    <tr>
                        <td><?= htmlspecialchars($paciente['name']) ?></td>
                        <td><?= htmlspecialchars($paciente['email']) ?></td>
                        <td><?= htmlspecialchars($paciente['phone']) ?></td>
                        <td>
                            <a href="/pacientes/editar/<?= $paciente['id'] ?>">Editar</a> |
                            <a href="/pacientes/excluir/<?= $paciente['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir este paciente?')">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">Nenhum paciente encontrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
