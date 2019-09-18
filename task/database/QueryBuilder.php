<?php


class QueryBuilder
{
    function getAllTasks()
    {
        $pdo = new PDO("mysql:host=localhost;dbname=test", 'root', '');
        $statement = $pdo->prepare("SELECT * FROM tasks");
        $statement->execute();
        $tasks = $statement->fetchAll(PDO::FETCH_ASSOC) or die("error query");
        return $tasks;
    }

    function addTask($data)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '') or die("connection error");
        $sql = "INSERT INTO tasks(title, content) VALUES (:title,:content)";
        $statement = $pdo->prepare($sql);
        $res = $statement->execute($data);
    }

    function showTasks($id)
    {
        $pdo = new PDO("mysql:host=localhost;dbname=test", 'root', '') or die("connection error");
        $sql = "SELECT title, content FROM tasks WHERE id=:id";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $task = $statement->fetch(PDO::FETCH_ASSOC);
        return $task;
    }

    function showTask($id)
    {
        $pdo = new PDO("mysql:host=localhost;dbname=test", 'root', '') or die("connection error");
        $sql = 'SELECT * FROM tasks WHERE id=:id';
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":id", $id);
        $statement->execute();
        $task = $statement->fetch(PDO::FETCH_ASSOC);
        return $task;
    }

    function updateTask($data)
    {
        $pdo = new PDO("mysql:host=localhost;dbname=test", 'root', '') or die("conn error");
        $sql = "UPDATE tasks SET title=:title, content=:content WHERE id=:id";
        $statement = $pdo->prepare($sql);
        $statement->execute($data);

    }

    function deleteTask($id)
    {
        $pdo = new PDO("mysql:host=localhost;dbname=test", 'root', '') or die("conn eror");
        $sql = "DELETE FROM tasks WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
}


