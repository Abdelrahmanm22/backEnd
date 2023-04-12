<?php


function addnewuser($username,$email,$password){

    $connection = mysqli_connect("localhost","root","","portfolio");

    $insertQuery = "INSERT INTO `users`(`user_name`, `email`, `password`) VALUES ('$username','$email','$password')";

    mysqli_query($connection,$insertQuery);

    $res = mysqli_affected_rows($connection);
    return ($res==1)?true:false;
}

function login($email,$password){

    $connection = mysqli_connect("localhost","root","","portfolio");
    $selectQuery = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password';";
    $obj = mysqli_query($connection,$selectQuery);

    $res = mysqli_fetch_assoc($obj);

    return $res;
    
}

?>