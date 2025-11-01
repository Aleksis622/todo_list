<?php
$pageTitle = "Izveidot ierakstu";

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'] ?? '';
    if ($content !== '' && strlen($content) <= 50) {
        $db->query("INSERT INTO todo_tasks (content) VALUES(:content)", ['content' => $content]);
        header("Location: /todo_list/");
        exit();
    } else {
        $error = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }
}

require "views/todo_view/create.view.php";
