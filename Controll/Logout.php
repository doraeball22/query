<?php
   session_start();
   session_unset(); // ลบตัวแปรทั้งหมด
   session_destroy();
   echo "<script>window.location='../pages/login.php';</script>";
?>
