<?php
// session_start();

function getSetteings(){
    $connection = mysqli_connect("localhost","root","","portfolio");
    $selectQuery = "SELECT * FROM `altSettings` LIMIT 1;";
    $obj=mysqli_query($connection,$selectQuery);
    $res= mysqli_fetch_assoc($obj);
    return $res;
}

function updateSetting($id,$title,$about,$avatar,$cv){

    $connection = mysqli_connect("localhost","root","","portfolio");

    $userID = $_SESSION['user']['user_id'];

    //echo $userID;die;
    $updateQuery = "UPDATE `settings` SET `title` = '$title' ,`about` = '$about' ";
    if(!empty($avatar)){
        $updateQuery.= ",`avatar` = '$avatar'";
    }
    if(!empty($cv)){
        $updateQuery.= ",`CV` = '$cv'";
    }
    $updateQuery.="WHERE `id` = $id;";


    // echo $updateQuery;
    // die;
    
    mysqli_query($connection,$updateQuery);

    $res = mysqli_affected_rows($connection);
    // echo $res;die;


    return ($res==1)?true:false;
}

?>