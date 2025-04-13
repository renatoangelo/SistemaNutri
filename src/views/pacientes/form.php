<?php
// views/pacientes/form.php
?>
<div class="container">
    <h2><?= isset($paciente) ? 'Editar Paciente' : 'Novo Paciente' ?></h2>

    <form method="POST" action="<?= isset($paciente) ? '/pacientes/atualizar/' . $paciente['id'] : '/pacientes/salvar' ?>">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" value="<?= $paciente['name'] ?? '' ?>" required>

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" value="<?= $paciente['email'] ?? '' ?>" required>

        <label for="phone">Telefone</label>
        <input type="text" id="phone" name="phone" value="<?= $paciente['phone'] ?? '' ?>">

        <label for="birthdate">Data de Nascimento</label>
        <input type="date" id="birthdate" name="birthdate" value="<?= $paciente['birthdate'] ?? '' ?>">

        <label for="gender">Gênero</label>
        <select id="gender" name="gender">
            <option value="">Selecione</option>
            <option value="M" <?= (isset($paciente['gender']) && $paciente['gender'] === 'M') ? 'selected' : '' ?>>Masculino</option>
            <option value="F" <?= (isset($paciente['gender']) && $paciente['gender'] === 'F') ? 'selected' : '' ?>>Feminino</option>
            <option value="O" <?= (isset($paciente['gender']) && $paciente['gender'] === 'O') ? 'selected' : '' ?>>Outro</option>
        </select>

        <button type="submit">Salvar</button>
        <a href="/pacientes"><button type="button">Cancelar</button></a>
    </form>
</div>
