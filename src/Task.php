<?php

class Task
{
    private $conn;
    private $table = 'tasks';

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function create($title, $description)
    {
        $query = "INSERT INTO $this->table (title, description) VALUES (:title, :description)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    public function readAll()
    {
        $query = "SELECT * FROM $this->table ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateStatus($id, $completed)
    {
        $query = "UPDATE $this->table SET completed = :completed WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':completed', $completed, PDO::PARAM_BOOL);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $query = "DELETE FROM $this->table WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}