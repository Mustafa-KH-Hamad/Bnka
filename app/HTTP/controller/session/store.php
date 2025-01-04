<?php 

use App\Class\Validator;

$db = dbreturn();

$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];

$validator = new Validator();

$exist = $validator->exist([
    'email' => $email,
    'password' => $password
]);

$validate = [
    isset($exist) ? implode(',',$validator->exist([
        'email' => $email,
        'password' => $password
    ])) : null,
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
    $user = $db->query('Select * from users where email=?',[$email])->fetch();

    if($user){
        if(password_verify( $password,$user['password'])){
            $_SESSION['email'] = $email;
            view("index.view.php");
            return;
        }
        $errors[] = "Invalid email or password";
    }
}



view("/session/index.view.php",
[
        'email' => $email,
        'errors' => $errors
    ]
);