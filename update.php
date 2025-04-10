<?php
require_once 'src/TaskController.php';
$controller = new TaskController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $completed = $_POST['completed'];
    $controller->toggleTask($id, $completed);
    header('Location: index.php');
    exit;
}