<?php

namespace topterm\init;

abstract class Bootstrap {

    private $routes;
    protected $id;

    public abstract function initRoutes();

    public function __construct() {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    protected function setRoutes(array $routes) {
        $this->routes = $routes;
    }

    public function getUrl() {
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $endereco = explode('/', $url);
        if ($url != '/') {
            $url = '';
            foreach ($endereco as $valor) {
                if (empty($valor)) {
                    $url = '/';
                } else {
                    if(is_numeric($valor)){
                        $this->id = $valor;
                    }
                    else{
                        $url .= $valor . '/';
                    }
                }
            }
            $url = substr($url,0,-1);
        }
        return $url;
    }

    protected function run($url) {
        array_walk($this->routes, function($route) use($url) {
            if ($url == $route['route']) {
                $class = "App\\Controllers\\" . ucfirst($route['controller']);
                $controller = new $class;
                if ($this->id == 0) {
                    $controller->$route['action']();
                } else {
                    $controller->$route['action']($this->id);
                }
            }
        });
    }

}
