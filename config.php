<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "mydb";

    $conn = new PDO("mysql:host = $server;dbname=$db",$user,$pass);
    ?>