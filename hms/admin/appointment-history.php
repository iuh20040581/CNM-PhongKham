<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bệnh nhân | Lịch sử cuộc hẹn</title>
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
        <div class="main-content" >
            <div class="wrap-content container" id="container">
                <section id="page-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="mainTitle">Bệnh nhân | Lịch sử cuộc hẹn</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li>
                                <span>Bệnh nhân </span>
                            </li>
                            <li class="active">
                                <span>Lịch sử cuộc hẹn</span>
                            </li>
                        </ol>
                    </div>
                </section>
                <div class="container-fluid container-fullw bg-white">
                    <div class="row">
                        <div class="col-md-12">
                            <p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
                                <?php echo htmlentities($_SESSION['msg']="");?></p>
                            <table class="table table-hover" id="sample-table-1">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th class="hidden-xs">Tên bác sĩ</th>
                                    <th>Tên bệnh nhân</th>
                                    <th>Chuyên ngành</th>
                                    <th>Phí tư vấn</th>
                                    <th>Ngày / Giờ hẹn</th>
                                    <th>Ngày tạo hẹn</th>
                                    <th>Tình trạng hiện tại</th>
                                    <th>Thao tác</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql=mysqli_query($connect,"select doctors.doctorName as docname,users.fullName as pname,appointment.*  from appointment join doctors on doctors.id=appointment.doctorId join users on users.id=appointment.userId ");
                                $cnt=1;
                                while($row=mysqli_fetch_array($sql))
                                {
                                ?>
                                <tr>
                                    <td class="center"><?php echo $cnt;?>.</td>
                                    <td class="hidden-xs"><?php echo $row['docname'];?></td>
                                    <td class="hidden-xs"><?php echo $row['pname'];?></td>
                                    <td><?php echo $row['doctorSpecialization'];?></td>
                                    <td><?php echo $row['consultancyFees'];?></td>
                                    <td><?php echo $row['appointmentDate'];?> / <?php echo
                                        $row['appointmentTime'];?>
                                    </td>
                                    <td><?php echo $row['postingDate'];?></td>
                                    <td>
                                        <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))
                                        {
                                            echo "Hoạt động";
                                        }
                                        if(($row['userStatus']==0) && ($row['doctorStatus']==1))
                                        {
                                            echo "Hủy bởi bệnh nhân";
                                        }

                                        if(($row['userStatus']==1) && ($row['doctorStatus']==0))
                                        {
                                            echo "Hủy bởi bác sĩ";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                            <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))
                                            { ?>
                                                <a href="appointment-history.php?id=<?php echo $row['id']?>&cancel=update" onClick="return confirm('Bạn có chắc chắn muốn hủy cuộc hẹn này không ?')"class="btn btn-transparent btn-xs tooltips" title="Hủy cuộc hẹn" tooltip-placement="top" tooltip="Remove">Hủy</a>
                                            <?php } else {
                                                echo "Đã hủy";
                                            } ?>
                                        </div>
                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                            <div class="btn-group" dropdown is-open="status.isopen">
                                                <button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
                                                    <i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu pull-right dropdown-light" role="menu">
                                                    <li>
                                                        <a href="#">
                                                            Sửa
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Chia sẻ
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Xóa
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php 
                                $cnt=$cnt+1;
                                }?>
                                </tbody>
                            </table>
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
<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="vendor/autosize/autosize.min.js"></script>
<script src="vendor/selectFx/classie.js"></script>
<script src="vendor/selectFx/selectFx.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
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
