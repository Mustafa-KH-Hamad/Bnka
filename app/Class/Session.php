<?php 
namespace App\Class;
class Session {
    
    public static function put($key , $value){
        return $_SESSION[$key] = $value;
    }

    public static function get($key , $default = null){
        return $_SESSION['_flash'][$key] ?? $_SESSION[$key] ?? $default;
    }
    
    public static function flash( $key ,$value){
        return $_SESSION['_flash'][$key] = $value;
    }

    public static function old($name){
        return $_SESSION[$name] ?? '';
    }

    public static function flush(){
        $_SESSION = [];
    }

    public static function destroy(){
        
        Session::flush();
        session_destroy();
        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);

    }
}