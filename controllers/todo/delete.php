<?php
$id = $_GET['id'] ?? null;
if ($id) {
    $db->query("DELETE FROM todo_tasks WHERE id = :id", ['id'=>$id]);
}
header("Location: /todo_list/");
exit();
