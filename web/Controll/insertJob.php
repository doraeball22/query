<?php
    
    require("../Model/job.php");

    $insert = new Job();
    $check = new Job();
    //echo $_GET["code"];
    $a = $_GET["code"];
    $checkJob = $check->checkJob($_POST["job_name"]);

    if($checkJob->num_rows > 0){
    	//echo "มี";
    	$message = "ชื่ออาชีพนี้มีอยู่ในระบบแล้ว กรุณาตรวจสอบความถูกต้องของข้อมูล";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.location='../pages/job_page.php?code=$a';</script>";
    } else{
    	//echo "ไม่";
    	$insert->insertJob($_POST["job_name"],$_GET["code"]);
	    echo "<script>window.location='../pages/job_page.php?code=$a';</script>";
    }

    



?>