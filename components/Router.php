<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = FILEPLACE.'/config/routes.php';
        $this->routes = include($routesPath);
    }


    /**
     *Returns request string
     *@return string
     */
    private function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }

    public function run()
    {
        //GET STRING
        $uri = $this->getURI();

        //CHECK STRING IN ROUTES.PHP
        //IF TRUE CHECK CONTROLLER AND ACTION
        foreach ($this->routes as $uriPattern => $path) {
            //CHECK $uriPattern AND $uri
            if (preg_match("~$uriPattern~", $uri)) {
                // CHECK WHAT CONTROLLER AND ACTION
                $internalRoute = preg_replace("~$uriPattern~",$path,$uri);

                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));
                $parameters = $segments;

                //CONNECT FILE CONTROLLER
                $controllerFile = FILEPLACE . '/controllers/' .
                    $controllerName . '.php';

                if (file_exists($controllerFile)){
                    include_once ($controllerFile);
                }

                //CREATE OBJECT, RUN METHOD(ACTION)
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject,$actionName),$parameters);
                if($result != null) {
                    break;
                }
            }
        }
    }
}