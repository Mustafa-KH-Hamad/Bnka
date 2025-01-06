<?php 

namespace App\Class\Middleware;

class Auth{

    public function handle(){
        if (isset($_SESSION['user'])){
            header('Location: /');
            exit;
        }
    }
}