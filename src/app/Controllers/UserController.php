<?php
namespace App\Controllers;

use App\Models\User;
use PDO;

class UserController
{
    private $model;

    public function __construct(PDO $db)
    {
        $this->model = new User($db);

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
    }

    // Listar usuários
    public function index()
    {
        $usuarios = $this->model->all();

        ob_start();
        require __DIR__ . '/../../views/usuarios/index.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layout.php';
    }

    // Exibir formulário de novo usuário
    public function create()
    {
        $usuario = null;

        ob_start();
        require __DIR__ . '/../../views/usuarios/form.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layout.php';
    }

    // Editar usuário existente
    public function edit($id)
    {
        $usuario = $this->model->find($id);

        ob_start();
        require __DIR__ . '/../../views/usuarios/form.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layout.php';
    }

    // Salvar novo usuário
    public function store()
    {
        $data = $_POST;
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $data['created_by'] = 1; // por enquanto fixo

        $this->model->create($data);
        header('Location: /usuarios');
        exit;
    }

    // Atualizar usuário existente
    public function update($id)
    {
        $data = $_POST;
        $this->model->update($id, $data);
        header('Location: /usuarios');
        exit;
    }

    // Deletar usuário
    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: /usuarios');
        exit;
    }
}
