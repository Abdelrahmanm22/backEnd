<?php
namespace MVC\models;
use MVC\core\model;
class setting extends model{

    public function getAllSettings(){
        $data = model::db()->rows("SELECT * FROM `setting`");
        return $data;
    }
    public function updateSettings($data,$id){
        $data =  model::db()->update("setting",$data,$id);
        return $data;
    }
}

?>