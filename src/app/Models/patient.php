<?php
namespace App\Models;

use PDO;

class Patient
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function allByUser($userId)
    {
        $stmt = $this->db->prepare("SELECT * FROM patients WHERE created_by = :created_by ORDER BY name ASC");
        $stmt->execute([':created_by' => $userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM patients WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO patients (name, email, phone, birthdate, gender, created_by) VALUES (:name, :email, :phone, :birthdate, :gender, :created_by)");
        return $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':phone' => $data['phone'],
            ':birthdate' => $data['birthdate'],
            ':gender' => $data['gender'],
            ':created_by' => $data['created_by']
        ]);
    }

    public function update($id, $data)
    {
        $stmt = $this->db->prepare("UPDATE patients SET name = :name, email = :email, phone = :phone, birthdate = :birthdate, gender = :gender WHERE id = :id");
        return $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':phone' => $data['phone'],
            ':birthdate' => $data['birthdate'],
            ':gender' => $data['gender'],
            ':id' => $id
        ]);
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM patients WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}
