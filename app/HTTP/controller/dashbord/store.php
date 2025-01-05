<?php

use App\Class\Session;
use App\Class\Validator;

$db = dbreturn();



if (Session::flash('errors', (new Validator)->exist(['name' => $_POST['name']])) ){
    redirect('/show?id='.$_POST['id']);
    exit;
};

$update = $db->query('Update users set name=:name,is_admin=:is_admin where id=:id',[
    ':name'=>$_POST['name'],
    ':is_admin'=>$_POST['is_admin'],
    ':id'=>$_POST['id']
])->fetch();

redirect('/dashbord');