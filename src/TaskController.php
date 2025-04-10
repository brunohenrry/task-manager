<?php
require_once 'config/Database.php';
require_once 'src/Task.php';

class TaskController
{
    private $task;

    public function __construct()
    {
        $db = new Database();
        $this->task = new Task($db->connect());
    }

    public function createTask($title, $description)
    {
        return $this->task->create($title, $description);
    }

    public function getTasks()
    {
        return $this->task->readAll();
    }

    public function toggleTask($id, $completed)
    {
        return $this->task->updateStatus($id, $completed);
    }

    public function deleteTask($id)
    {
        return $this->task->delete($id);
    }
}