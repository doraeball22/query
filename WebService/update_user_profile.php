<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include("../Model/ConnectDatabase.php");

$fname=$_GET["fname"];
$lname=$_GET["lname"];
$email=$_GET["email"];
$password=$_GET["password"];
$gender="";
if(isset($_GET["gender"])){
	$gender=intval($_GET["gender"]);
}
$old_email=$_GET["oldemail"];
  // echo $fname   ." ".$lname." ".$email." ".$password." ".$gender." ".$old_email;
 // echo "       ".isset($_GET["fname"]) ." ".isset($_GET["lname"])." ".isset($_GET["email"])." ".isset($_GET["password"])." ".isset($_GET["gender"])." ".isset($_GET["gender"]);

 // echo "       ".!empty($_GET["fname"])   ." ".!empty($_GET["lname"])." ".!empty($_GET["email"])." ".!empty($_GET["password"])." ".!empty($_GET["gender"])." em".!empty($_GET["oldemail"]) ;

// if(isset($_GET["fname"]) && isset($_GET["lname"])&& isset($_GET["email"])&& isset($_GET["password"])&& isset($_GET["gender"]) && isset($_GET["oldemail"]) ){
// if( !empty($_GET["fname"])  && !empty($_GET["lname"])&& !empty($_GET["email"])&& !empty($_GET["password"])&& !empty($_GET["gender"]) && !empty($_GET["oldemail"]) ){


// $fname=$_GET["fname"];
// $lname=$_GET["lname"];
// $email=$_GET["email"];
// $password=$_GET["password"];
// $gender=$_GET["gender"];

// To protect MySQL injection for Security purpose
$fname = stripslashes($fname);
$lname = stripslashes($lname);
$email = stripslashes($email);
$password = stripslashes($password);
$gender = stripslashes($gender);
$old_email=stripslashes($old_email);

$fname = mysql_real_escape_string($fname);
$lname = mysql_real_escape_string($lname);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);
$gender = mysql_real_escape_string($gender);
$old_email=mysql_real_escape_string($old_email);

//$sql="UPDATE user SET fname = $fname , lname = $lname , email = $email, pass = $password, sex = $gender WHERE user.email = $old_email";
$sql="UPDATE `user` SET `fname` = '$fname', `lname` = '$lname', `email` = '$email', `pass` = '$password', `sex` = '$gender' WHERE `user`.`email` = '$old_email';";
// echo $sql;

	if ($conn->query($sql) === TRUE) {
		$outp=json_encode(array("created"=>"1" , "exists"=> "0","error" => $conn->error  ));

	}
	else{
		//echo $conn->error;
		$outp=json_encode(array("created"=>"0" , "exists"=> "1","error" =>$conn->error ));
	} 

// created= 1 means the account is created.
// exists =1 means the account already exists.
echo $outp;
$conn->close();	
// }
// }
?>