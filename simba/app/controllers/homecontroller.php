<?php

namespace MVC\controllers;

use GUMP;
use MVC\core\controller;
use MVC\models\user;
use MVC\models\setting;
use MVC\core\Session;
use MVC\core\helpers;
class homecontroller extends controller{
    public function __construct()
    {
        
        Session::Start();
    }
    public function index(){
        $title = "home";
        // $user = new user();
        // $data = $user->getAllUsers();
        $Setting = new setting();
        $dataSettings = $Setting->getAllSettings();
        $s=[];
        foreach($dataSettings as $x):
            $s=$x;
        endforeach;
        $this->view("\home\index",['title'=>$title,'data'=>$s]);
    }

    
    // public function register(){
    //     // echo "qq";die;
    //     $this->view("\home\\register",['title'=>'register']);
    // }
    // public function postRegister(){
    //     $user = new user();
    //     $id = $user->insertUser($_POST['username'],$_POST['email'],$_POST['password']);
    // }
    
}
?>