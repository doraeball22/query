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

$sql1 = "SELECT `comment_id`, `comment_text`, `owner` FROM `comment` WHERE `test_name`=".$_GET['group'];
$result = $conn->query($sql1);

    /*if ($result1->num_rows > 0)
    {
        $array1 = array();
            while($row1 = mysqli_fetch_assoc($result1)){

                    $array1 = array('comment_id'=>$row1['comment_id'],'comment_text'=>$row1['comment_text'],'owner'=>$row1['owner'],'test_name'=>$row1['test_name']);
                    echo json_encode($array1,JSON_UNESCAPED_UNICODE);
            }

        
    }

    else {
        echo json_encode(0,JSON_NUMERIC_CHECK);
    }*/

    $outp = "";
    $n = 1;
    while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
        if ($outp != "") {$outp .= ",";}
            $outp .= '{"comment_id":"'.$rs["comment_id"].'",';
            $outp .= '"comment_text":"'.$rs["comment_text"].'",';
            if($rs["owner"]==""){
                $outp .= '"owner":"ความคิดเห็นที่ '.$n. '"}';
            } else {
                $outp .= '"owner":"ความคิดเห็นที่ '.$n.' จาก '.$rs["owner"]. '"}';
            }
            
            $n++;
    }
    $outp ='{"records":['.$outp.']}';
    

    echo($outp);
    

$conn->close();

?>

