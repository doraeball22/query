<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
echo json_encode(array("testing"=>TRUE));
include("../Model/ConnectDatabase.php");

if(isset($_GET["history"]) && isset($_GET["user_id"])&& isset($_GET["type"])){

if( !empty($_GET["history"])  && !empty($_GET["user_id"])&& !empty($_GET["type"])){

$history=$_GET["history"];
$user_id=$_GET["user_id"];
$type=$_GET["type"];

//echo json_encode(array("history"=>$history , "user_id"=>$user_id ,"type"=>$type));

$history=$_GET["history"];
$user_id=$_GET["user_id"];
$type=$_GET["type"];


// To protect MySQL injection for Security purpose
$history = stripslashes($history);
$user_id = stripslashes($user_id);
$type = stripslashes($type);

$history = mysql_real_escape_string($history);
$user_id = mysql_real_escape_string($user_id);
$type = mysql_real_escape_string($type);

$outp=array();
$sql="INSERT INTO history_test (history_id, history, user_id, type) VALUES (NULL, '$history', '$user_id', '$type');";
//echo $sql;

// check can insert history
if($conn->query($sql) === TRUE) {
	// $outp='{"result":{"created": "0" , "exists": "1" }';
	$outp=json_encode(array("created"=>TRUE));
}
else{	
	//echo $conn->error;
	$outp=json_encode(array("created"=>False));
} 
echo $outp;

$conn->close();	

}
}
?>