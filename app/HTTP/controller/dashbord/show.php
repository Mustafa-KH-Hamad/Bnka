<?php 

$db = dbreturn();

$user = $db->query('Select * from users where id=?',[$_GET['id'] ?? abort()])->fetch();

$classes = $db->query('Select * from classes')->fetchAll();



if(!$user){
    abort();
}

view('/dashbord/show.view.php',[
    'user' => $user,
    'classes' => $classes
]);