<?php

$db = dbreturn();
$users = $db->query('Select * from users')->fetchAll();

view('/dashbord/index.view.php',['users'=>$users]);