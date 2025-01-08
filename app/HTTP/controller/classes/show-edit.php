<?php
$db = dbreturn();


$id = $_GET['id'] ?? abort();

$classes = $db->query('Select * from classes where id=?',[$id])->fetch();

view("classes/show-edit.view.php",[
    'classes' => $classes
]);