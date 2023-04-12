<?php
    session_start();

    //from data base
    $users = ['abdelrahman22'=>123456,'yasser'=>654321,'hosny'=>456789];
    $stat=true;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        foreach($users as $u => $p){
            if($u==$_GET['username'] && $p==$_GET['password']){
                $_SESSION['Login']=true;
                $_SESSION['username']=$_GET['username'];
                header('LOCATION:home.php');
                $stat=false;
            }
        }
        if($stat){
            header("LOCATION:index.html");
        }
    }else{
        echo "Error";
    }


?>