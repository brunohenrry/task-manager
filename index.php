<?php
require_once 'src/TaskController.php';
$controller = new TaskController();
$tasks = $controller->getTasks();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Gerenciador de Tarefas</h1>
        <a href="create.php" class="btn btn-primary mb-3">Adicionar Tarefa</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?php echo $task['id']; ?></td>
                        <td><?php echo $task['title']; ?></td>
                        <td><?php echo $task['description']; ?></td>
                        <td><?php echo $task['completed'] ? 'Concluída' : 'Pendente'; ?></td>
                        <td>
                            <form action="update.php" method="POST" style="display:inline;">
                                <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                                <input type="hidden" name="completed" value="<?php echo $task['completed'] ? 0 : 1; ?>">
                                <button type="submit"
                                    class="btn btn-sm btn-<?php echo $task['completed'] ? 'warning' : 'success'; ?>">
                                    <?php echo $task['completed'] ? 'Reabrir' : 'Concluir'; ?>
                                </button>
                            </form>
                            <form action="delete.php" method="POST" style="display:inline;">
                                <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>