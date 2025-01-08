<?php

use App\Class\Session;
use App\Class\Validator;
$db = dbreturn();
$id = $_POST['id'];
$class_name = $_POST['class_name'];
$teacher_name = $_POST['teacher_name'];

if (Session::flash('errors', (new Validator)->exist([
    'id' => $id,
    'class_name' => $class_name,
    'teacher_name' => $teacher_name   
    ]
    )) ){
    redirect('/classes/edit?id='.$id);
    exit;
};

$db->query('update classes set class_name=?,teacher_name=? where id=?',[$class_name,$teacher_name,$id]);

redirect('/classes');