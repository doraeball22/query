<?php
     //header ("location : http://www.google.com");
     //exit(0);
    session_start();
    //

    //echo $Admin['firstname'];
    if($_SESSION == false){
        //echo "0";
        echo "<script>window.location='../pages/login.php';</script>";
    } else {
        //echo "1";
        $Admin = $_SESSION["admin"];

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Me Insight</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">ทดสอบ JSON</h3></center>
                    </div>
                    <div class="panel-body">
                        <fieldset>
                            <p><a href="../WebService/randomQuestion16pf.php" target="_blank" class="btn btn-info btn-block">คำถามแบบทดสอบ 16 PF</a></p>
                            <p><a href="../WebService/phpGetQIntell.php"  target="_blank" class="btn btn-info btn-block">คำถามแบบทดสอบพหุปัญญา</a></p>
                            <p><a href="../WebService/jobtest.php"  target="_blank" class="btn btn-info btn-block">ข้อมูลแบบทดสอบความสนใจในอาชีพ</a></p>
                            <br/>
                            <p><center><a href="../pages/index.php" class="btn btn-success"><i class="fa fa-arrow-left"></i> กลับหน้าแรก</a></center></p>
                        </fieldset>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
</body>

</html>
