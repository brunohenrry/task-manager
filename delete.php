<?php
require_once 'src/TaskController.php';
$controller = new TaskController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $controller->deleteTask($id);
    header('Location: index.php');
    exit;
}