<h2>Usuários Cadastrados</h2>

<a href="/usuarios/novo" style="
    display: inline-block;
    margin-bottom: 15px;
    padding: 10px 15px;
    background-color: var(--bordo);
    color: white;
    border-radius: 4px;
    text-decoration: none;
">+ Novo Usuário</a>

<table style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr style="background-color: var(--terra-claro);">
            <th style="padding: 10px; border-bottom: 1px solid #ccc;">ID</th>
            <th style="padding: 10px; border-bottom: 1px solid #ccc;">Nome</th>
            <th style="padding: 10px; border-bottom: 1px solid #ccc;">Email</th>
            <th style="padding: 10px; border-bottom: 1px solid #ccc;">Tipo</th>
            <th style="padding: 10px; border-bottom: 1px solid #ccc;">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td style="padding: 8px;"><?= $usuario['id'] ?></td>
            <td style="padding: 8px;"><?= $usuario['name'] ?></td>
            <td style="padding: 8px;"><?= $usuario['email'] ?></td>
            <td style="padding: 8px;"><?= $usuario['role'] ?></td>
            <td style="padding: 8px;">
                <a href="/usuarios/editar/<?= $usuario['id'] ?>" style="margin-right: 8px;">✏️ Editar</a>
                <a href="/usuarios/excluir/<?= $usuario['id'] ?>" onclick="return confirm('Deseja excluir este usuário?')">🗑️ Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
