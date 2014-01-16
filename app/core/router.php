<?php

class Router
{
    static function start() {
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        $controllerName = ( !empty($routes[1]) ? $routes[1] : 'Index');
        $actionName     = ( !empty($routes[2]) ? $routes[2] : 'index');

        $modelName = $controllerName;
        $controllerName = $controllerName . '_Controller';
        $actionName = $actionName . 'Action';

        $modelPath = "app/models/" . strtolower($modelName) . ".php";
        if(file_exists($modelPath)) {
            include_once $modelPath;
        }

        $controllerPath = "app/controllers/". strtolower($controllerName) . ".php";
        if(file_exists($controllerPath)) {
            include_once $controllerPath;
        }
        else {
            Router::Error404();
        }
        
        $controller = new $controllerName;
        $action     = $actionName;
        
        if(method_exists($controller, $action)){
            $controller->$action();
        }
        else {
            Router::Error404();
        }
    }

    static function Error404() {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'error');
    }
    
}