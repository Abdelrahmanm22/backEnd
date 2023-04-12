<?php
session_start();
function addNewPortfolio($title,$desc,$img){

    $connection = mysqli_connect("localhost","root","","portfolio");

    $userID = $_SESSION['user']['user_id'];
    //echo $userID;die;
    $insertQuery = "INSERT INTO `portfolios`(`title`, `description`, `img`, `user_id`) VALUES ('$title','$desc','$img',$userID)";

    mysqli_query($connection,$insertQuery);

    $res = mysqli_affected_rows($connection);
    return ($res==1)?true:false;

}
function updatePortfolio($id,$title,$desc,$img){

    $connection = mysqli_connect("localhost","root","","portfolio");

    $userID = $_SESSION['user']['user_id'];
    //echo $userID;die;
    $updateQuery = "UPDATE `portfolios` SET `title` = '$title' ,`description` = '$desc' ";
    if(!empty($img)){
        $updateQuery.= ", `img` = '$img'";
    }
    $updateQuery.="WHERE `portfolio_id` = $id;";


    
    mysqli_query($connection,$updateQuery);

    $res = mysqli_affected_rows($connection);

    return ($res==1)?true:false;

}
function getPortfolios(){

    $connection = mysqli_connect("localhost","root","","portfolio");
    $selectQuery = "SELECT * FROM `allportfolios`;";
    $obj=mysqli_query($connection,$selectQuery);

    $pro=[];
    while($res = mysqli_fetch_assoc($obj)){
        $pro [] = $res; 
    }
    
    return $pro;
}
function getPortfoliosbyID($id){

    $connection = mysqli_connect("localhost","root","","portfolio");
    $selectQuery = "SELECT * FROM `allportfolios` WHERE `portfolio_id` = $id";
    $obj=mysqli_query($connection,$selectQuery);
    $res= mysqli_fetch_assoc($obj);
    return $res;
}

function deletePortfoliobyID($id){

    $connection = mysqli_connect("localhost","root","","portfolio");
    $deletQuery = "DELETE FROM `portfolios` WHERE `portfolio_id`=$id";
    mysqli_query($connection,$deletQuery);
    $res = mysqli_affected_rows($connection);
    return ($res==1)?true:false;
}
?>