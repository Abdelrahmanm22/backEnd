<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\user;
class homecontroller extends controller{

    public function index(){
        $title = "home";
        $h1 = "hello";
        $user = new user();
        $data=$user->GetAllUsers();
        // $data = $this->db()->rows("SELECT * FROM users");
        
        $this->view("\home\index",['title'=>$title,'data'=>$data]); 
    }

    public function add(){
        echo "add";
    }
}

?>