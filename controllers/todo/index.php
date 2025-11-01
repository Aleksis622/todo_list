<?php
$pageTitle = "Visi ieraksti";

$searchQuery = $_GET['search_query'] ?? '';


$sql = "SELECT * FROM todo_tasks";
$params = [];


if ($searchQuery !== '') {
    $sql .= " WHERE content LIKE :query";
    $params['query'] = "%$searchQuery%";
}

$posts = $db->query($sql, $params)->fetchAll();

require "views/todo_view/index.view.php";
