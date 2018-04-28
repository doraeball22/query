<?php
    
    require("../Model/intell.php");

    $edit = new Intell();
    //echo $_GET["code"];
    $a = $_GET["g"];
    //echo $a;
   

    //echo "<script>window.location='../pages/Intell_page.php?code=$a';</script>";

    $check = new Intell();
    //echo $_GET["code"];
    $checkQ = $check->checkQIntellEdit($_GET["code"], $_POST["question"]);

    if($checkQ->num_rows > 0){
    	//echo "มี";
    	$message = "คำถามนี้มีอยู่ในระบบแล้ว กรุณาตรวจสอบความถูกต้องของข้อมูล";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.location='../pages/Intell_page.php?code=$a';</script>";
    } else{
    	//echo "ไม่";
    	$edit->editQIntell($_POST["question"],$_POST["sy"],$_POST["sn"],$_GET["code"]);
    	$message = "แก้ไขสำเร็จ";
        echo "<script type='text/javascript'>alert('$message');</script>";
    	echo "<script>window.location='../pages/Intell_page.php?code=$a';</script>";
    }


?>