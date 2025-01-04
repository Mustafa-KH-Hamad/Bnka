<?php 

use App\Class\Validator;
use App\Class\Authenticator;

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
    $errors[] =(new Authenticator)->attempt($email, $password);
}



view("/session/index.view.php",
[
        'email' => $email,
        'errors' => $errors
    ]
);