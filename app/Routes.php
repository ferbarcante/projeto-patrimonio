<?php 

    namespace app;


    class Route {

        private $routes;
        // ROTAS QUE NOSSA APLICAÇÃO POSSUI

        public function __construct()
        {
            $this->initRoutes();
            $this->run($this->getUrl());
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
            $routes['home'] = array(
                'route' => '/home',
                'controller' => 'HomeController',
                'action' => 'index'
            );

            $this->setRoutes($routes);
            
        }

        public function run($url)
        {
            foreach($this->getRoutes() as $key => $route)
            {
                if($url == $route['route'])
                {
                    $class = "app\\controller\\".ucfirst($route['controller']);

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
