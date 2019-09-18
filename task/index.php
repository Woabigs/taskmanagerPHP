<?php

require_once 'database/QueryBuilder.php';
$db = new QueryBuilder();

$tasks = $db->getAllTasks();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TaskManager</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>All tasks</h1>
            <a href="create.php" class="btn btn-success">Add task</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= $task['id']; ?></td>
                        <td><?= $task['title']; ?></td>
                        <td>
                            <a href="show.php?id=<?= $task['id']; ?>" class="btn btn-info">Show post</a>
                            <a href="edit.php?id=<?= $task['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?= $task['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>

