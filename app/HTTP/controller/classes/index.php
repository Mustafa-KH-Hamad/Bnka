<?php 

$db = dbreturn();

$classes = $db->query('SELECT * FROM users group by classes_id')->fetchAll();

dd($classes);

view('classes/index.view.php');