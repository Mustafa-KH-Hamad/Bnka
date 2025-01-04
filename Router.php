<?php 
class Router {

    protected $routes = [];

    public function add($path,$controller,$method){
        $this->routes[] = [
            'path' => $path,
            'controller' => $controller,
            'method' => strtoupper($method)
        ];
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

    public function routes(){
        foreach ($this->routes as $route) {
            if ((parse_url($_SERVER['REQUEST_URI'])['path'] == $route['path']) &&
            $_SERVER["REQUEST_METHOD"] == $route['method']){
                require $route['controller'];
                exit;
            }
        }
        abort(); 
       
    }
}