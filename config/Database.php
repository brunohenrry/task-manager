<?php

class Database
{
    private $host = 'localhost';
    private $dbname = 'task_manager';
    private $username = 'root'; // Ajuste conforme seu usuário
    private $password = '';     // Ajuste conforme sua senha
    private $conn;

    public function connect()
    {
        try {
            $this->conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
            return null;
        }
    }
}