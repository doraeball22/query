<?php
    
    require("../Model/Admin.php");

    session_start();
    $Admin = $_SESSION["admin"];

    $editAd = new Admin();


    if($_POST["password"] == $Admin["password"]){

        if($_POST["NewPass"] == $_POST["ConNewPass"]){
            $editAd->editPass($Admin["username"], $_POST["NewPass"]);
            $message = "บันทึกการแก้ไขข้อมูลผู้ดูแลสำเร็จ กรุณาเข้าสู่ระบบใหม่";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script>window.location='../pages/login.php';</script>";
        } else {
            $message = "ยืนยัน Password ผิดพลาด กรุณาลองใหม่";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script>window.location='../pages/edit_password_page.php';</script>";
        }
    	

    } else {
    	$message = "Password ไม่ถูกต้อง กรุณาลองใหม่";
	    echo "<script type='text/javascript'>alert('$message');</script>";
	    echo "<script>window.location='../pages/edit_password_page.php';</script>";
    }

?>