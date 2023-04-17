<?php

namespace MVC\controllers;
use GUMP;
use MVC\core\controller;
use MVC\models\user;
use MVC\core\Session;
class usercontroller extends controller{
    public function __construct()
    {
        Session::Start();
        $userData = Session::Get('user');
        // echo $userData;
        if(empty($userData)){
            echo "class not access";
            die;
        }
    }
    public function index(){
        $this->view("\home\userhome",['title'=>'home']);
    }
    public function logout(){
        Session::Stop();
    }
}
?>