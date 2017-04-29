<?php

//echo date("h:i:sa");
//echo $_GET['email'];
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include("../Model/ConnectDatabase.php");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//echo $_GET['comment'];
//echo $_GET['group'];
$sql1 = "INSERT INTO `comment` (`comment_id`, `comment_text`, `owner`, `test_name`) VALUES (NULL, ".$_GET['comment'].", '', ".$_GET['group'].");";
$result = $conn->query($sql1);

    if($result){
        echo true;
    }else{
        echo false;
    }
    

$conn->close();

?>

