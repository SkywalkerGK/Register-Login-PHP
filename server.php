<?php  
    $servername = "localhost";
    $username = "root";
    $password = "0817260364";
    $dbname = "register_db";

    //create connection
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    //Check connection

    if (!$conn) {
        die("connection failed" . mysqli_connect_error());
    }
?>