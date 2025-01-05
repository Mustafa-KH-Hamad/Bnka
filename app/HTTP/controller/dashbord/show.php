<?php 

$db = dbreturn();

$user = $db->query('Select * from users where id=?',[$_GET['id'] ?? abort()])->fetch();

if(!$user){
    abort();
}

view('/dashbord/show.view.php',[
    'user'=>$user
]);