<?php

namespace MVC\controllers;
use GUMP;
use MVC\core\controller;
use MVC\models\user;
use MVC\core\Session;
use MVC\core\helpers;
use MVC\models\setting;
class adminsettingcontroller extends controller{
    public $setting;
    public function __construct()
    {
        
        Session::Start();
        $this->user_data = Session::Get('user');
        // print_r($this->user_data);die;
        if(empty($this->user_data)){
            helpers::redirect("admin/login");
        }
        $this->setting = new setting();
        
    }
    public function index(){
        $setting = $this->setting->getAllSettings();
        $this->view("\back\setting",['title'=>'home','Setting'=>$setting,'data'=>$this->user_data]);
    }
    public function update(){
        $setting = $this->setting->getAllSettings();
        $s=[];
        foreach($setting as $x):
            $s=$x;
        endforeach;
        $this->view("\back\updatesetting",['title'=>'home','Setting'=>$s,'data'=>$this->user_data]);
    }

    public function postUpdate(){
        // echo "cc";die;

        $name = $_POST['username'];
        $jobTitle = $_POST['jobTitle'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $desc = $_POST['desc'];
        $title = $_POST['title'];
        $id = ['id'=>$_POST['id']];
        $admin = $this->user_data->admin_id;
        $data = ['name'=>$name,'job_title'=>$jobTitle,'description'=>$desc,'email'=>$email,'phone'=>$phone,'title'=>$title,'admin_id'=>$admin];
        if(!empty($_FILES['img']['name'])){
            $tmpName = $_FILES['img']['tmp_name'];
            $fileName = $_FILES['img']['name'];
            move_uploaded_file($tmpName,"img/".$fileName);
            // array_push($data,'img'=>$fileName);
            $data += ['img'=>$fileName];
        }
        if(!empty($_FILES['logo']['name'])){
            $tmpName = $_FILES['logo']['tmp_name'];
            $fileName = $_FILES['logo']['name'];
            move_uploaded_file($tmpName,"img/".$fileName);
            // array_push($data,'img'=>$fileName);
            $data += ['logo'=>$fileName];
        }
        
        $x = $this->setting->updateSettings($data,$id); 

        if($x){
            helpers::redirect("adminsetting/index");
        }else{
            helpers::redirect("adminsetting/update");
        }
        
    }
}
?>