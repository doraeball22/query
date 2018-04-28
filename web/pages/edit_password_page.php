<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("header.php"); ?>
</head>

<body>

    <div id="wrapper">
        <?php include("menu.php"); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-10">
                    <h2 class="page-header"><i class="fa fa-edit"></i> แก้ไข Password สำหรับเข้าสู่ระบบ</h2>
                </div>
                <!-- /.col-lg-12 -->
                <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form  class="form-login" action = "../Controll/edit_pass_controll.php" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <label>password ใหม่</label>
                                        <input class="form-control" name="NewPass" type="password" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>กรุณายืนยัน password ใหม่</label>
                                        <input class="form-control" name="ConNewPass" type="password" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>กรุณายืนยันการเปลี่ยนแปลงด้วย password ปัจจุบันของคุณ</label>
                                        <input class="form-control" name="password" type="password" value="" required>
                                    </div>
                                    <button type="submit" class="btn btn-success">
                                        บันทึกการเปลี่ยนแปลง
                                    </button>
                                </fieldset>
                            </form>
                            <br/><br/>
                            <a href="edit_admin_page.php" class="btn btn-info"><i class="fa fa-caret-left"></i> กลับ</a>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
