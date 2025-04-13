<?php
namespace App\Controllers;

use App\Models\Patient;
use PDO;

class PatientController
{
    private $model;

    public function __construct(PDO $db)
    {
        $this->model = new Patient($db);

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
    }

    public function index()
    {
        $userId = $_SESSION['user_id'];
        $pacientes = $this->model->allByUser($userId);

        ob_start();
        require __DIR__ . '/../../views/pacientes/index.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layout.php';
    }

    public function create()
    {
        $paciente = null;

        ob_start();
        require __DIR__ . '/../../views/pacientes/form.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layout.php';
    }

    public function edit($id)
    {
        $paciente = $this->model->find($id);

        ob_start();
        require __DIR__ . '/../../views/pacientes/form.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layout.php';
    }

    public function store()
    {
        $data = $_POST;
        $data['created_by'] = $_SESSION['user_id'];

        $this->model->create($data);
        $_SESSION['success_message'] = "Paciente cadastrado com sucesso!";
        header('Location: /pacientes');
        exit;
    }

    public function update($id)
    {
        $data = $_POST;
        $this->model->update($id, $data);
        $_SESSION['success_message'] = "Paciente atualizado com sucesso!";
        header('Location: /pacientes');
        exit;
    }

    public function delete($id)
    {
        $this->model->delete($id);
        $_SESSION['success_message'] = "Paciente EXCLUÍDO com sucesso!";
        header('Location: /pacientes');
        exit;
    }
}
