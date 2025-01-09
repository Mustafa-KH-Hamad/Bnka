<?php
$db = dbreturn();


$id = $_GET['id'] ?? abort();

$classes = $db->query('Select * from classes where id=?', [$id])->fetch();

if (!$classes) {
    abort();
}
view("classes/show-edit.view.php", [
    'classes' => $classes
]);
