<?php
    
    require("../Model/Admin.php");

    session_start();
    $Admin = $_SESSION["admin"];

    $editAd = new Admin();
    //$a = $_GET["grob"];
    $editAd->editAdmin($Admin["username"], $_POST["firstname"], $_POST["lastname"], $_POST["email"]);

    $message = "บันทึกการแก้ไขข้อมูลผู้ดูแลสำเร็จ กรุณาเข้าสู่ระบบใหม่";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>window.location='../pages/login.php';</script>";

?>