<?php

namespace App\Models;

use PDO;

class User
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function all()
    {
        $stmt = $this->db->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $sql = "INSERT INTO users (name, email, password, role, birthdate, status, avatar, created_by)
                VALUES (:name, :email, :password, :role, :birthdate, :status, :avatar, :created_by)";

        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => $data['role'],
            'birthdate' => $data['birthdate'],
            'status' => $data['status'],
            'avatar' => $data['avatar'] ?? null,
            'created_by' => $data['created_by'] ?? 1,
        ]);
    }

    public function update($id, $data)
    {
        $sql = "UPDATE users SET 
                    name = :name, 
                    email = :email, 
                    role = :role, 
                    birthdate = :birthdate,
                    status = :status, 
                    avatar = :avatar 
                WHERE id = :id";
    
        $stmt = $this->db->prepare($sql);
    
        return $stmt->execute([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'birthdate' => $data['birthdate'],
            'status' => $data['status'],
            'avatar' => $data['avatar'] ?? null,
            'id' => $id,
        ]);
    }
    

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
