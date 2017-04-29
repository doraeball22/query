<?php
    
    require("../Model/Admin.php");

    session_start();
    $Admin = $_SESSION["admin"];

    $editAd = new Admin();

    if($_POST["NewUsername"] == $Admin["username"]){
    	$message = "Username ไม่มีการเปลี่ยนแปลงกรุณาลองใหม่";
	    echo "<script type='text/javascript'>alert('$message');</script>";
	    echo "<script>window.location='../pages/edit_username_page.php';</script>";
    }

    if($_POST["password"] == $Admin["password"]){
    	$editAd->editUsername($Admin["username"], $_POST["NewUsername"]);
    	$message = "บันทึกการแก้ไขข้อมูลผู้ดูแลสำเร็จ กรุณาเข้าสู่ระบบใหม่";
	    echo "<script type='text/javascript'>alert('$message');</script>";
	    echo "<script>window.location='../pages/login.php';</script>";

    } else {
    	$message = "Password ไม่ถูกต้องกรุณาลองใหม่";
	    echo "<script type='text/javascript'>alert('$message');</script>";
	    echo "<script>window.location='../pages/edit_username_page.php';</script>";
    }

?>