<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include("../Model/ConnectDatabase.php");

$sql="(SELECT * FROM question_16pf WHERE pers_type='A' order by RAND() LIMIT 3) 
UNION ALL (SELECT * FROM question_16pf WHERE pers_type='B' order by RAND() LIMIT 3)
UNION ALL (SELECT * FROM question_16pf WHERE pers_type='C' order by RAND() LIMIT 3)
UNION ALL (SELECT * FROM question_16pf WHERE pers_type='E' order by RAND() LIMIT 3)
UNION ALL (SELECT * FROM question_16pf WHERE pers_type='F' order by RAND() LIMIT 3)
UNION ALL (SELECT * FROM question_16pf WHERE pers_type='G' order by RAND() LIMIT 3)
UNION ALL (SELECT * FROM question_16pf WHERE pers_type='H' order by RAND() LIMIT 3)
UNION ALL (SELECT * FROM question_16pf WHERE pers_type='I' order by RAND() LIMIT 3)
UNION ALL (SELECT * FROM question_16pf WHERE pers_type='L' order by RAND() LIMIT 3)
UNION ALL (SELECT * FROM question_16pf WHERE pers_type='M' order by RAND() LIMIT 3)
UNION ALL (SELECT * FROM question_16pf WHERE pers_type='Q4' order by RAND() LIMIT 3)
UNION ALL (SELECT * FROM question_16pf WHERE pers_type='Q3' order by RAND() LIMIT 3)
UNION ALL (SELECT * FROM question_16pf WHERE pers_type='Q2' order by RAND() LIMIT 3)
UNION ALL (SELECT * FROM question_16pf WHERE pers_type='Q1' order by RAND() LIMIT 3)
UNION ALL (SELECT * FROM question_16pf WHERE pers_type='O' order by RAND() LIMIT 3)
UNION ALL (SELECT * FROM question_16pf WHERE pers_type='N' order by RAND() LIMIT 3)";
// echo $sql;
$results=$conn->query($sql);
$rows = array();
$i=0;
while($row = $results->fetch_assoc()){
	$rows[$i]=$row;
	$i++;
}


// created= 1 means the account is created.
// exists =1 means the account already exists.
echo json_encode($rows, JSON_UNESCAPED_UNICODE);
$conn->close();	


?>