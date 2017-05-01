<?php
    
    require("../Model/16pf.php");

    $a=$_GET["codeA"];
    $ap=$_GET["codeP"];
    $an=$_GET["codeN"];
    $id=$_GET["code"];

    $editQ = new Question16PF();

    $check = new Question16PF();
    //echo $_GET["code"];
    $checkQ = $check->checkQ16PFEdit($id, $_POST["question"]);

    if($checkQ->num_rows > 0){
    	//echo "มี";
    	$message = "คำถามนี้มีอยู่ในระบบแล้ว กรุณาตรวจสอบความถูกต้องของข้อมูล";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.location='../pages/16pf_page.php?codeA=$a&codeP=$ap&codeN=$an';</script>";
    } else{
    	//echo "ไม่";
    	$editQ->editQuestion16PF($id, $_POST["question"], $_POST["c1"], $_POST["c2"], $_POST["c3"]);
    	$message = "แก้ไขสำเร็จ";
        echo "<script type='text/javascript'>alert('$message');</script>";
    	echo "<script>window.location='../pages/16pf_page.php?codeA=$a&codeP=$ap&codeN=$an';</script>";
    }

?>