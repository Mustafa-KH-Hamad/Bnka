<?php 
class Validator{

    public function email($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

   public function emailDuplication ($existance){
    
    if ($existance) {
        return "Email already exists";
    }
    return null; 
    }

    public function exist(...$args){
        $errors = [];
        
        foreach ($args[0] as $key => $arg){
            if(empty($arg)){
                $errors[] = "the $key field is required";
            }
        }
        if(!empty($errors)){
            return $errors;
        }
        return null; 
    }

    public function password($password,$min = 1 , $max = INF){
        if(strlen($password) >= $min && strlen($password) <= $max){
            return true;
        }
        return false ;
    }
}