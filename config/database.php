<?php  
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "fitness_db";
    $port = "8886";

    $conn = mysqli_connect($servername,$username,$password,$dbname,$port);
    if(!$conn){
        die("Connection feild".mysqli_connect_error());
    }else{
        // echo "Connection success";
    }