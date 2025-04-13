<div class="container">
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
        </tbody>
    </table>
</div>
