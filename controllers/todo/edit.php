<?php
$id = $_GET['id'] ?? null;
if (!$id) header("Location: /todo_list/");

$post = $db->query("SELECT * FROM todo_tasks WHERE id = :id", ['id' => $id])->fetch();
if (!$post) header("Location: /todo_list/");

$pageTitle = "Rediģēt ierakstu";
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'] ?? '';
    if ($content !== '' && strlen($content) <= 50) {
        $db->query("UPDATE todo_tasks SET content = :content WHERE id = :id", [
            'content' => $content,
            'id' => $id
        ]);
        header("Location: /todo_list/");
        exit();
    } else {
        $error = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }
}

require "views/todo_view/edit.view.php";
