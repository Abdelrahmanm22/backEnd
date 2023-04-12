<?php
    session_start();
    if(empty($_SESSION['Login'])){
        echo "please login to access this page!";
        header('REFRESH:3;URL=index.html');
    }else{
        echo 'Welcome to home page, '.$_SESSION['username'];
        echo '<a href="logout.php">logout</a>';
    }
?>