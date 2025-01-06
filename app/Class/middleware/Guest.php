<?php 

namespace App\Class\Middleware;

class Guest{

    public function handle(){
        if (!isset($_SESSION['user'])){
            header('Location: /session');
            exit;
        }
    }
}