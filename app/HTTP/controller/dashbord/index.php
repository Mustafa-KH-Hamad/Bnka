<?php

$db = dbreturn();

$recordsPerPage = 15;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$offset = ($page - 1) * $recordsPerPage;

$users = $db->query(
    "SELECT * FROM users ORDER BY DOB DESC LIMIT $offset, $recordsPerPage"
)->fetchAll();

$classes = $db->query('SELECT * FROM classes')->fetchAll();

$totalUsers = $db->query('SELECT COUNT(*) as count FROM users')->fetch()['count'];
$totalPages = ceil($totalUsers / $recordsPerPage);

view('/dashbord/index.view.php', [
    'users' => $users,
    'classes' => $classes,
    'totalPages' => $totalPages,
    'currentPage' => $page,
]);
