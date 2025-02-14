<?php 

use App\Class\Validator;
use App\Class\ClassesModification;

$db = dbreturn();


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$DOB = $_POST['DOB'];
$errors = [];

//todo adding a class to put users accordingly 

//todo try to fix the null returning of the exist so that it can be refactored the problem is that the exist function returns null when 
//all datas are available and the implode cannot work with null values :) 

$validator = new Validator();

$emailExistance = $db->query('Select * from users where email=?',[$email])->fetch();

$exist = $validator->exist([
    'name' => $name,
    'DOB' => $DOB,
    'email' => $email,
    'password' => $password
]);

$validate = [
    isset($exist) ? implode(',',$validator->exist([
        'name' => $name,
        'email' => $email,
        'DOB' => $DOB,
        'password' => $password
    ])) : null,
    $validator->emailDuplication($emailExistance) 
];

foreach ($validate as $valid){
    if(isset($valid)){
        $errors[] = $valid;
    }
}

if(!($validator->email($email) && $validator->password($password,8,100))) {
    $errors[] = "Invalid email or password </br> please password must be between 8 and 100 characters";
}

if (empty($errors)) {
    $db->query('INSERT INTO `users`(`name`, `email`, `password`,`DOB`) VALUES (?,?,?,?)',[
        $name,
        $email,
        password_hash($password,PASSWORD_DEFAULT),
        $DOB
    ]
);

    redirect("/session");
}


view("/register/index.view.php",[
        'name' => $name,
        'email' => $email,
        'errors' => $errors
    ]);