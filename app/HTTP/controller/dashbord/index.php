<?php

$db = dbreturn();
$users = $db->query('Select * from users order by DOB desc')->fetchAll();

$classes = $db->query('Select * from classes')->fetchAll();

view('/dashbord/index.view.php',[
    'users'=>$users,
    'classes'=>$classes
    ]
);