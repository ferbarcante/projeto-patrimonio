<?php 

namespace App;

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Route {

    private $routes;

    public function __construct()
    {
        $this->initRoutes();
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function setRoutes($routes)
    {
        $this->routes = $routes;
    }

    protected function initRoutes() 
    {
        $routes['home'] = [
            'route' => '/home',
            'controller' => 'HomeController',
            'action' => 'index'
        ];

        $routes['pessoa'] = [
            'route' => '/pessoa',
            'controller' => 'PessoaController',
            'action' => 'index'
        ];

        $this->setRoutes($routes);
    }

    public function run($url)
    {
        foreach ($this->getRoutes() as $key => $route) {
            if ($url == $route['route']) {
                $class = "App\\Controllers\\" . ucfirst($route['controller']);
                var_dump($route['controller']);
                
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
        }
    }

    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
