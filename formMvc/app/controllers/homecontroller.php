<?php

namespace MVC\controllers;

use GUMP;
use MVC\core\controller;
use MVC\models\user;
use MVC\core\Session;
use MVC\core\helpers;
class homecontroller extends controller{
    public function __construct()
    {
        Session::Start();
    }
    public function index(){
        $title = "home";
        $user = new user();
        $data = $user->getAllUsers();
        $this->view("\home\index",['title'=>$title,'data'=>$data]);
    }

    public function login(){
        $this->view("\home\login",['title'=>'login']);
    }
    public function postLogin(){
        $v = GUMP::is_valid($_POST,[
            'email'=>'required',
            'password'=> 'required|between_len,4;100'
        ]);
        if($v==1){ 
            $user = new user();
            $data = $user->getUser($_POST['email'],$_POST['password']);
            if(!empty($data)){
                Session::Set('user',$data);
                helpers::redirect("user\index");
            }else{
                echo "null";
            }
        }
    }
    public function register(){
        // echo "qq";die;
        $this->view("\home\\register",['title'=>'register']);
    }
    public function postRegister(){
        $user = new user();
        $id = $user->insertUser($_POST['username'],$_POST['email'],$_POST['password']);
    }
    
}
?>