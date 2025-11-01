<?php
$id = $_GET['id'] ?? null;
if (!$id) header("Location: /todo_list/");

$post = $db->query("SELECT * FROM todo_tasks WHERE id = :id", ['id'=>$id])->fetch();
if (!$post) header("Location: /todo_list/");

$pageTitle = "Skatīt ierakstu";
require "views/todo_view/show.view.php";
