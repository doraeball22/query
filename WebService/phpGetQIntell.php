<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include("../Model/ConnectDatabase.php");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$group = $_GET['group'];
//$email = $_GET['email'];

$sql1 = "(SELECT `q_Intel_id`, `question`, `intell`, `score_yes`, `score_no` FROM `question_intel` WHERE `intell`='ภาษา' order by RAND() LIMIT 5) 
UNION ALL (SELECT `q_Intel_id`, `question`, `intell`, `score_yes`, `score_no` FROM `question_intel` WHERE `intell`='ตรรกศาสตร์และคณิตศาสตร์' order by RAND() LIMIT 5)
UNION ALL (SELECT `q_Intel_id`, `question`, `intell`, `score_yes`, `score_no` FROM `question_intel` WHERE `intell`='มิติสัมพันธ์' order by RAND() LIMIT 5)
UNION ALL (SELECT `q_Intel_id`, `question`, `intell`, `score_yes`, `score_no` FROM `question_intel` WHERE `intell`='ร่างกายและการเคลื่อนไหว' order by RAND() LIMIT 5)
UNION ALL (SELECT `q_Intel_id`, `question`, `intell`, `score_yes`, `score_no` FROM `question_intel` WHERE `intell`='ดนตรี' order by RAND() LIMIT 5)
UNION ALL (SELECT `q_Intel_id`, `question`, `intell`, `score_yes`, `score_no` FROM `question_intel` WHERE `intell`='มนุษยสัมพันธ์' order by RAND() LIMIT 5)
UNION ALL (SELECT `q_Intel_id`, `question`, `intell`, `score_yes`, `score_no` FROM `question_intel` WHERE `intell`='การเข้าใจตนเอง' order by RAND() LIMIT 5)
UNION ALL (SELECT `q_Intel_id`, `question`, `intell`, `score_yes`, `score_no` FROM `question_intel` WHERE `intell`='ธรรมชาติวิทยา' order by RAND() LIMIT 5)";
$results = $conn->query($sql1);


$rows = array();
$i=0;
while($row = $results->fetch_assoc()){
    $rows[$i]=$row;
    $i++;
}



echo json_encode($rows, JSON_UNESCAPED_UNICODE);
    

$conn->close();

?>

