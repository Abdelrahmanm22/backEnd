<?php

namespace MVC\controllers;
use GUMP;
use MVC\core\controller;
use MVC\models\user;
use MVC\core\Session;
use MVC\core\helpers;
class admincontroller extends controller{

    public function __construct()
    {
        Session::Start();
    }
    public function index(){
        $this->user_data = Session::Get('user');
        
        if(empty($this->user_data)){
            helpers::redirect("admin/login");
        }
        // var_dump($user_data);die;
        $this->view("\back\index",['title'=>'home','data'=>$this->user_data]);
    }
    
    public function login(){
        $this->view("\back\login",['title'=>'login']);
    }
    public function postLogin(){
        
        $v = GUMP::is_valid($_POST,[
            'email'=>'required',
            'password'=> 'required|between_len,3;100'
        ]);
        if($v==1){
            $user = new user();
            $data = $user->getUser($_POST['email'],$_POST['password']);
            if(!empty($data)){
                Session::Set('user',$data);
                helpers::redirect("admin\index");
            }else{
                echo "null";
            }
        }
    }

    public function register(){
        $this->view("\back\\register",['title'=>'sign up']);
    }

    public function postRegister(){
        $user = new user();
        $id = $user->insertUser($_POST['username'],$_POST['email'],$_POST['password']);
        helpers::redirect("admin/login");
        // echo $id;die;
    }

    public function logout(){
        Session::Stop();
        helpers::redirect("admin/login");
    }
}
?>