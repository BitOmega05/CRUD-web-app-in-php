<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="crud_operation";

    $conn=mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        die("Conecction Failed!");
    }
    
?>