<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "my_password";
$dbname = "me_db";



$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
$conn->set_charset("utf8");

    
?>