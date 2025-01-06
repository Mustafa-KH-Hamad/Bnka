<?php 

namespace App\Class\Middleware;

class Middleware{

    public const MAP = [
        'auth' => Guest::class,
        'guest' => Auth::class,
        'admin' => Admin::class
    ];
    public static function middleware($key){
        if (!$key) {
            return;
        }

        $middleware = static::MAP[$key] ?? false;

        if (!$middleware) {
            throw new \Exception("No matching middleware found for key '{$key}'.");
        }

        (new $middleware)->handle();
    
    }
}