<?php

use App\Class\Session;
use App\Class\Validator;

$db = dbreturn();

$id=$_POST['id'];
$classes_id = $_POST['classes_id'];
$name = $_POST['name'];
$DOB = $_POST['DOB'];
$is_admin = $_POST['is_admin'];
$teacher_name = $db->query('Select teacher_name from classes where id=?',[$classes_id])->fetch();




if (Session::flash('errors', (new Validator)->exist([
    'classes_id' => $classes_id,
    'name' => $name,
    'DOB' => $DOB    
    ]
    )) ){
    redirect('/show?id='.$id);
    exit;
};

$updateUsers = $db->query('Update users set classes_id=:classes_id,name=:name,DOB=:DOB,is_admin=:is_admin where id=:id',[
    ':classes_id'=>$classes_id,
    ':name'=>$name,
    ':DOB'=>$DOB,
    ':is_admin'=>$is_admin,
    ':id'=>$id
])->fetch();

redirect('/dashbord');