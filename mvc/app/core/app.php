<?php

namespace MVC\core;
class app{

    private $controller;
    private $method;
    private $params;

    public function __construct()
    {
        $this->splitURL();
        $this->render();
    }

    private function splitURL(){
        if(!empty($_SERVER['QUERY_STRING'])){
            $url = explode("/",$_SERVER['QUERY_STRING']);
            
            $this->controller = isset($url[0])?$url[0]."controller":"homecontroller";

            //set method
            $this->method = isset($url[1])?$url[1]:"index";

            //set parameters
            unset($url[0],$url[1]);
            $this->params = array_values($url);
        }else{
            // echo "xxx";die;
            $url = explode("/",$_SERVER['QUERY_STRING']);
            $this->controller="homecontroller";
            $this->method = "index";
            unset($url[0],$url[1]);
            $this->params = array_values($url);
        }
    }

    private function render(){
        
        $controller = "MVC\controllers\\".$this->controller;
        
        if(class_exists($controller)){
            // echo $controller;die;
            $controller = new $controller; // $controller = MVC\controllers\homecontroller(); make object from homecontroller
            if(method_exists($controller,$this->method)){
                // echo $this->method;die;
                call_user_func_array([$controller,$this->method],$this->params);
                
            }else{
                echo "no";
            }
        }else{
            echo "no";
        }
    }

}

?>