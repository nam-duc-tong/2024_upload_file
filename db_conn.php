<?php
    $localhost = "localhost";
    $root = "root";
    $password = "";
    $db_name = "test_db";
    $conn = mysqli_connect($localhost,$root,$password,$db_name);
    if(!$conn){
        echo "Connection failed";
        exit();
    }
   
?>