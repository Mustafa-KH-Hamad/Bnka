<?php 

$db = dbreturn();


if(empty($_POST['id'])){
    abort();
}

$db->query('Delete from users where id=?',[$_POST['id']]);

redirect('/dashbord');