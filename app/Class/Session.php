<?php 

class Session {
    
    public static function put($key , $value){
        return $_SESSION[$key] = $value;
    }

    public static function get($key , $default = null){
        return $_SESSION['_flash'][$key] ?? $_SESSION[$key] ?? $default;
    }
    
    public function flash( $key ,$value){
        return $_SESSION['_flash'][$key] = $value;
    }

    public static function old($name){
        return $_SESSION[$name] ?? '';
    }

    public static function flush(){
        $_SESSION = [];
    }

}