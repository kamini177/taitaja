<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "quiz_app";
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
?>