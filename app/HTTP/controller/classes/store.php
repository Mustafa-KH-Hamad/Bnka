<?php 
use App\Class\Validator;

$db = dbreturn();

$class_name = $_POST['class_name'];
$teacher_name = $_POST['teacher_name'];


$errors = (new Validator)->exist([
    'class_name' => $class_name,
    'teacher_name' => $teacher_name
]);
if (!empty($errors)) {
    view('/classes/show.view.php',[
        'class_name' => $class_name,
        'teacher_name' => $teacher_name,
        'errors' => $errors
    ]);
    exit;
}
$db->query('Insert into classes(class_name,teacher_name) values(?,?)',
    [$class_name,$teacher_name]
);

redirect('/classes');