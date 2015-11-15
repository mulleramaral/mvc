<?php

namespace topterm\init;

abstract class Bootstrap {

    private $routes;

    public abstract function initRoutes();

    public function __construct() {
        $this->initRoutes();
        $this->run($this->getUrl(), $this->getId());
    }

    protected function setRoutes(array $routes) {
        $this->routes = $routes;
    }

    public function getUrl() {
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if ($url <> '/') {
            print_r(explode('/', $url));
            $endereco = explode('/', $url);
            $url = '/' . $endereco[1];
        }
        return $url;
    }

    public function getId() {
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $id = 0;
        if ($url <> '/') {
            $endereco = explode('/', $url);
            $id = $endereco[2];
        }
        return $id;
    }

    protected function run($url, $id = 0) {
        array_walk($this->routes, function($route) use($url, $id) {
            if ($url == $route['route']) {
                $class = "App\\Controllers\\" . ucfirst($route['controller']);
                $controller = new $class;
                if($id==0){
                    $controller->$route['action']();
                }
                else{
                    $controller->$route['action']($id);
                }
            }
        });
    }

}
