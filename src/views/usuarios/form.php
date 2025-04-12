<?php
$isEdit = isset($usuario);
$action = $isEdit ? "/usuarios/atualizar/{$usuario['id']}" : "/usuarios/salvar";
$title = $isEdit ? "Editar Usuário" : "Novo Usuário";
?>

<h2><?= $title ?></h2>

<form action="<?= $action ?>" method="POST">
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" value="<?= $usuario['name'] ?? '' ?>" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?= $usuario['email'] ?? '' ?>" required>

    <label for="birthdate">Data de Nascimento:</label>
    <input type="date" name="birthdate" id="birthdate" value="<?= $usuario['birthdate'] ?? '' ?>">

    <label for="role">Tipo de Usuário:</label>
    <select name="role" id="role" required>
        <option value="nutricionista" <?= isset($usuario) && $usuario['role'] === 'nutricionista' ? 'selected' : '' ?>>Nutricionista</option>
        <option value="admin" <?= isset($usuario) && $usuario['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
        <option value="superadmin" <?= isset($usuario) && $usuario['role'] === 'superadmin' ? 'selected' : '' ?>>Superadmin</option>
    </select>

    <label for="status">Status:</label>
    <select name="status" id="status" required>
        <option value="ativo" <?= isset($usuario) && $usuario['status'] === 'ativo' ? 'selected' : '' ?>>Ativo</option>
        <option value="inativo" <?= isset($usuario) && $usuario['status'] === 'inativo' ? 'selected' : '' ?>>Inativo</option>
    </select>

    <?php if (!$isEdit): ?>
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required>
    <?php endif; ?>

    <br><br>
    <button type="submit" style="
        padding: 10px 20px;
        background-color: var(--bordo);
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    ">
        Salvar
    </button>
</form>
