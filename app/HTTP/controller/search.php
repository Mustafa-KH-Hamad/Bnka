<?php 

$db = dbreturn();

// First query
$search = $db->query(
    "SELECT GROUP_CONCAT(classes_id) as classes_id FROM users WHERE name LIKE :q",
    [':q' => '%' . $_GET['q'] . '%']
)->fetchAll();

// Extract classes_id into an array
$classIds = explode(',', $search[0]['classes_id']); // Convert the comma-separated string to an array
// Prepare placeholders for the IN clause
$placeholders = implode(',', array_fill(0, count($classIds), '?'));
// Build and execute the second query
$classes = $db->query(
    "SELECT * FROM classes WHERE id IN ($placeholders)",
    $classIds
)->fetchAll();

view('search.view.php',
[
    'classes' => $classes,
    'user' => $_GET['q']
]);