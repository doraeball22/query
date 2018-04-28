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

$sql1 = "SELECT MIN(cnt) FROM (SELECT COUNT(*) cnt FROM job GROUP BY job_group) job;";
//select min count 
$results = $conn->query($sql1);


$rows = array();
$i=0;
$minrow=8;
while($row = $results->fetch_assoc()){
    $rows[$i]=$row;
    $i++;
    
    	$minrow=$row["MIN(cnt)"];
    if($minrow>8){
    	$minrow=8;
    }
    //echo $row["MIN(cnt)"];
}
//echo $minrow;
$jobgroup=array();
$sql1 = "SELECT DISTINCT(job_group) as jobgroup FROM job WHERE 1;";
$results = $conn->query($sql1);

$index1=0;
$number_grouptype=0;
$testobj=array();
while($row = $results->fetch_assoc()){
$number_grouptype++;
	$sql1 = "SELECT `job_id`, `job`, `job_group` FROM `job` WHERE `job_group`='".$row["jobgroup"]."' order by RAND() LIMIT ".$minrow.";";
	$results2 = $conn->query($sql1);
	$job_sub_group=array();
	$index2=0;
	while($row2 = $results2->fetch_assoc()){
		//echo $row2["job_id"]." ".$row2["job"]." ".$row2["job_group"];
		$row2["index"]=$index2;
		$testobj[$index2][]=$row2;
		$job_sub_group[$index2]=$row2;
		$index2++;

	}
	$jobgroup[$row["jobgroup"]]=$job_sub_group;
	$index1++;
}
echo json_encode($testobj, JSON_UNESCAPED_UNICODE);

$conn->close();

?>

