<?php

require_once 'database/QueryBuilder.php';
$db = new QueryBuilder();

$task = $db->showTasks($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>
                <?= $task['title']; ?>
            </h1>
            <p>
                <?= $task['content']; ?>
            </p>
            <a href="/">go back</a>
        </div>
    </div>
</div>
</body>
</html>

</body>
</html>