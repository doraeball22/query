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

$sql1 = "SELECT * FROM user where email=".$_GET['email'];
$result1 = $conn->query($sql1);

    if ($result1->num_rows > 0)
    {
        $array1 = array();
            while($row1 = mysqli_fetch_assoc($result1)){

                    $array1 = array('fname'=>$row1['fname'],'lname'=>$row1['lname'],'email'=>$row1['email'],'pass'=>$row1['pass'],'sex'=>$row1['sex']);

            }

        echo json_encode($array1);
    }

    else {
        echo json_encode(0,JSON_NUMERIC_CHECK);
    }

    

$conn->close();

?>

