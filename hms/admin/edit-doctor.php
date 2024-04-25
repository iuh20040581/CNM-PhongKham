<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
$did=intval($_GET['id']);// lấy id của bác sĩ
if(isset($_POST['submit']))
{
    $docspecialization=$_POST['Doctorspecialization'];
    $docname=$_POST['docname'];
    $docaddress=$_POST['clinicaddress'];
    $docfees=$_POST['docfees'];
    $doccontactno=$_POST['doccontact'];
    $docemail=$_POST['docemail'];
    $sql=mysqli_query($connect,"Update doctors set specilization='$docspecialization',doctorName='$docname',address='$docaddress',docFees='$docfees',contactno='$doccontactno',docEmail='$docemail' where id='$did'");
    if($sql)
    {
        echo "<script>alert('Cập nhật Thông tin Bác sĩ thành công');</script>";

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin | Chỉnh sửa Thông tin Bác sĩ</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
    <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
</head>
<body>
<div id="app">        
    <?php include('include/sidebar.php');?>
    <div class="app-content">
        <?php include('include/header.php');?>
        <div class="main-content">
            <div class="wrap-content container" id="container">
                <!-- start: PAGE TITLE -->
                <section id="page-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="mainTitle">Admin | Chỉnh sửa Thông tin Bác sĩ</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li>
                                <span>Admin</span>
                            </li>
                            <li class="active">
                                <span>Chỉnh sửa Thông tin Bác sĩ</span>
                            </li>
                        </ol>
                    </div>
                </section>
                <!-- end: PAGE TITLE -->
                <!-- start: BASIC EXAMPLE -->
                <div class="container-fluid container-fullw bg-white">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row margin-top-30">
                                <div class="col-lg-8 col-md-12">
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">Thêm Bác sĩ</h5>
                                        </div>
                                        <div class="panel-body">
                                            <?php 
                                            $sql=mysqli_query($connect,"select * from doctors where id='$did'");
                                            while($data=mysqli_fetch_array($sql))
                                            {
                                            ?>
                                            <form role="form" name="adddoc" method="post" onSubmit="return valid();">
                                                <div class="form-group">
                                                    <label for="DoctorSpecialization">
                                                        Chuyên khoa của Bác sĩ
                                                    </label>
                                                    <select name="Doctorspecialization" class="form-control" required="required">
                                                        <option value="<?php echo htmlentities($data['specilization']);?>">
                                                            <?php echo htmlentities($data['specilization']);?></option>
                                                        <?php 
                                                        $ret=mysqli_query($connect,"select * from doctorspecilization");
                                                        while($row=mysqli_fetch_array($ret))
                                                        {
                                                        ?>
                                                        <option value="<?php echo htmlentities($row['specilization']);?>">
                                                            <?php echo htmlentities($row['specilization']);?>
                                                        </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="doctorname">
                                                        Tên Bác sĩ
                                                    </label>
                                                    <input type="text" name="docname" class="form-control" value="<?php echo htmlentities($data['doctorName']);?>" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">
                                                        Địa chỉ Phòng khám của Bác sĩ
                                                    </label>
                                                    <textarea name="clinicaddress" class="form-control"><?php echo htmlentities($data['address']);?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="fess">
                                                        Học phí tư vấn của Bác sĩ
                                                    </label>
                                                    <input type="text" name="docfees" class="form-control" required="required"  value="<?php echo htmlentities($data['docFees']);?>" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="fess">
                                                        Số điện thoại của Bác sĩ
                                                    </label>
                                                    <input type="text" name="doccontact" class="form-control" required="required"  value="<?php echo htmlentities($data['contactno']);?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="fess">
                                                        Email của Bác sĩ
                                                    </label>
                                                    <input type="email" name="docemail" class="form-control"  readonly="readonly"  value="<?php echo htmlentities($data['docEmail']);?>">
                                                </div>
                                                <?php } ?>
                                                <button type="submit" name="submit" class="btn btn-o btn-primary">
                                                    Cập nhật
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php');?>
<?php include('include/setting.php');?>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/modernizr/modernizr.js"></script>
<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="vendor/switchery/switchery.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form-elements.js"></script>
<script>
    jQuery(document).ready(function() {
        Main.init();
        FormElements.init();
    });
</script>
</body>
</html>
