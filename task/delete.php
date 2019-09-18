<?php

require_once 'database/QueryBuilder.php';
$db = new QueryBuilder();

$db->deleteTask($_GET['id']);

header("Location: /");
exit();

