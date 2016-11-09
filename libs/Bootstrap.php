<?php

class Bootstrap {

    function __construct() {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode("/", rtrim($url,"/"));
        if(empty($url[0])){
            require 'controllers/index.php';
            $controller = new Index();
            $controller->loadModel("index");
            $controller->index();
            return false;
        }
        $url[0] = str_replace(".php", "", $url[0]);
        $controller = 'controllers/'.$url[0].'.php';
        if(file_exists($controller)){
            require $controller;
        }else{
            require 'controllers/error.php';
            $controller = new Error();
            $controller->index();
            return false;
        }
        $controller = new $url[0];
        $controller->loadModel($url[0]);
        if(isset($url[2])){
            if(method_exists($controller, $url[1])){
                $controller->{$url[1]}($url[2]);
            }else{
                require 'controllers/error.php';
                $controller = new Error();
                $controller->index();
                return false;
            }
        }else{
            if(isset($url[1])){
                if(method_exists($controller, $url[1])){
                    $controller->{$url[1]}();
                }else{
                    require 'controllers/error.php';
                    $controller = new Error();
                    $controller->index();
                    return false;
                }
            }else{
                $controller->index();
            }
        }

    }

}
