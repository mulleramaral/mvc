<?php

namespace topterm\init;

abstract class Bootstrap {
    
    private $routes;
    
    public abstract function initRoutes();
    
    public function __construct() {
        $this->initRoutes();
        $this->run($this->getUrl());
    }
    
    protected function setRoutes(array $routes){
        $this->routes = $routes;
    }
    
    public function getUrl(){
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }
    
    protected function run($url){
        array_walk($this->routes,function($route) use($url){
            if($url == $route['route']){
                $class = "App\\Controllers\\" . ucfirst($route['controller']);
                $controller = new $class;
                $controller->$route['action']();
            }
        });
    }
    
    
}
