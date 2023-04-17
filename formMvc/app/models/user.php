<?php
namespace MVC\models;
use MVC\core\model;
class user extends model{

    public function getAllUsers(){
        $data = model::db()->rows("SELECT * FROM users");
        return $data;
    }
    public function getUser($email,$pass){
        $data = model::db()->row("SELECT * FROM users where `email`=? and `password`=?",[$email,$pass]);
        return $data;
    }
    public function insertUser($username,$email,$pass){
        $id = model::db()->insert('users', ['user_name' => $username, 'email' => $email,'password'=>$pass]);
        return $id;
    }
}

?>
