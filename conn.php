<?php
    $host = "localhost";
    $database = "arthur";
    $user = "root";
    $pass = "";

    $mysqli = new mysqli($host, $user, $pass, $database);

    if ($mysqli->connect_errno){
        echo "connection faild: ( ". $mysqli->connect_errno . ") ". $mysqli->connect_errno;
    }
?>