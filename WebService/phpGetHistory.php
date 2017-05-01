<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include("../Model/ConnectDatabase.php");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$group = $_GET['group'];
$email = $_GET['email'];

$sql1 = "SELECT `history_id`, `history`, `user_id`, `type` FROM `history_test` WHERE `type` =$group AND `user_id` = $email";
$result = $conn->query($sql1);


    $outp = "";
    $n=1;
    while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
        if ($outp != "") {$outp .= ",";}
            $outp .= '{"history_id":"'.$rs["history_id"].'",';
            $outp .= '"num":"'.$n.'",';
            $outp .= '"history":"'.$rs["history"].'",';
            $outp .= '"user_id":"'.$rs["user_id"].'",';
            $outp .= '"type":"'.$rs["type"].'"}';
            $n++;
    }
    $outp ='{"records":['.$outp.']}';
    

    echo($outp);
    

$conn->close();

?>

