<?php 

$db = dbreturn();

$classes = $db->query('SELECT classes_id, GROUP_CONCAT(id) AS user_ids, GROUP_CONCAT(name) AS user_names
    FROM users
    GROUP BY classes_id')->fetchAll();

$teachers_name = $db->query('Select * from classes')->fetchAll();
view('classes/index.view.php',
[
    'classes' => $classes,
    'teachers_name' => $teachers_name
]);