<?php 
namespace App\Class;

class Router {

    protected $routes = [];
    protected $method = [];


    public function add($path,$controller,$method ){
        $this->routes[] = [
            'path' => $path,
            'controller' => $controller,
            'method' => strtoupper($method),
            'middleware' => null
        ];
        return $this ;
    }

    public function get($path,$controller){
        $this->add($path,$controller,'GET');
        return $this;
    }
    public function post($path,$controller){
        $this->add($path,$controller,'POST');
        return $this;
    }
    public function put($path,$controller){
        $this->add($path,$controller,'PUT');
        return $this;
    }
    public function patch($path,$controller){
        $this->add($path,$controller,'PATCH');
        return $this;
    }
    public function delete($path,$controller){
        $this->add($path,$controller,'DELETE');
        return $this;
    }

    public function only($key){
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        return $this; 
    }

    public function routes(){

        $this->method = $_POST['_method'] ?? $_SERVER["REQUEST_METHOD"];
        foreach ($this->routes as $route) {
            if ((parse_url($_SERVER['REQUEST_URI'])['path'] == $route['path']) &&
                $this->method == $route['method']){
                    dd($this->routes);
                require $route['controller'];
                exit;
            }
        }
        abort();  
    }
}