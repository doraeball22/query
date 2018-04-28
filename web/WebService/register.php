<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include("../Model/ConnectDatabase.php");

$fname=$_GET["fname"];
$lname=$_GET["lname"];
$email=$_GET["email"];
$password=$_GET["password"];
$gender=$_GET["gender"];
 // echo $fname   ." ".$lname." ".$email." ".$password." ".$gender;
 // echo "       ".isset($_GET["fname"]) ." ".isset($_GET["lname"])." ".isset($_GET["email"])." ".isset($_GET["password"])." ".isset($_GET["gender"]);

 // echo "       ".!empty($_GET["fname"])   ." ".!empty($_GET["lname"])." ".!empty($_GET["email"])." ".!empty($_GET["password"])." ".!empty($_GET["gender"]) ;

// if(isset($_GET["fname"]) && isset($_GET["lname"])&& isset($_GET["email"])&& isset($_GET["password"])&& isset($_GET["gender"]) ){
// if( !empty($_GET["fname"])  && !empty($_GET["lname"])&& !empty($_GET["email"])&& !empty($_GET["password"])&& !empty($_GET["gender"])  ){



$fname=$_GET["fname"];
$lname=$_GET["lname"];
$email=$_GET["email"];
$password=$_GET["password"];
$gender=$_GET["gender"];

// To protect MySQL injection for Security purpose
$fname = stripslashes($fname);
$lname = stripslashes($lname);
$email = stripslashes($email);
$password = stripslashes($password);
$gender = stripslashes($gender);

// $fname = mysql_real_escape_string($fname);
// $lname = mysql_real_escape_string($lname);
// $email = mysql_real_escape_string($email);
// $password = mysql_real_escape_string($password);
// $gender = mysql_real_escape_string($gender);


$check="SELECT * FROM user where email like '$email'";
$rs = $conn->query($check);
$data =$rs->num_rows;

// check if the user already exists.
if($data>0) {
// $outp='{"result":{"created": "0" , "exists": "1" }';
$outp=json_encode(array("created"=>"0" , "exists"=> "1" ));
}
else{	
$sql = "INSERT INTO user (fname, lname, email, pass, sex) VALUES ('$fname', '$lname', '$email', '$password', '$gender');";		
if ($conn->query($sql) === TRUE) {
$outp=json_encode(array("created"=>"1" , "exists"=> "0" ));
} 
}
// created= 1 means the account is created.
// exists =1 means the account already exists.
echo $outp;
$conn->close();	
// }
// }
?>