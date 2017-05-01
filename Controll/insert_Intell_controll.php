<?php
    
    require("../Model/intell.php");

    $insert = new Intell();
    //echo $_GET["code"];
    $check = new Intell();
    //echo $_GET["code"];
    $a = $_GET["code"];
    $checkQ = $check->checkQIntell($_POST["question"]);

    if($checkQ->num_rows > 0){
    	//echo "มี";
    	$message = "คำถามนี้มีอยู่ในระบบแล้ว กรุณาตรวจสอบความถูกต้องของข้อมูล";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.location='../pages/Intell_page.php?code=$a';</script>";
    } else{
    	//echo "ไม่";
    	$insert->insertQIntell($_POST["question"],$_POST["sy"],$_POST["sn"],$_GET["code"]);
    	$message = "เพิ่มคำถามสำเร็จ";
        echo "<script type='text/javascript'>alert('$message');</script>";
    	echo "<script>window.location='../pages/Intell_page.php?code=$a';</script>";
    }


?>