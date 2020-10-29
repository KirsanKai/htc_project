<?php
class Router {

    // Урл http://localhost/ :: Главная страница 
    // Урл http://localhost/figures/show/ :: Показать фигуры
    // Урл http://localhost/add/circle/ :: Добавить фигуру круг
    // Урл http://localhost/add/triangle/ :: Добавить фигуру треугольник 
    // Урл http://localhost/add/parallelogram/ :: Добавить фигуру параллелограм 

    public static function start() {

        $controllerName = "IndexController";
        $modelName = "IndexModel";
        $action = "index";

        $route = explode("/", $_SERVER['REQUEST_URI']);

        if (isset($route[2]) && $route[1] != '') {
            $controllerName = ucfirst($route[1] . "Controller");
            $modelName = ucfirst($route[1] . "Model");
        }
        
        include CONTROLLER_PATH . $controllerName . ".php";
        include MODEL_PATH . $modelName . ".php";

        if (isset($route[2]) && $route[2] != '') {
            $action = $route[2];
        }

        $controller = new $controllerName();
        $controller->$action();

    }

}