<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{
	$docspecialization=$_POST['Doctorspecialization'];
	$docname=$_POST['docname'];
	$docaddress=$_POST['clinicaddress'];
	$docfees=$_POST['docfees'];
	$doccontactno=$_POST['doccontact'];
	$docemail=$_POST['docemail'];
	$password=md5($_POST['npass']);
	$sql=mysqli_query($connect,"insert into doctors(specilization,doctorName,address,docFees,contactno,docEmail,password) values('$docspecialization','$docname','$docaddress','$docfees','$doccontactno','$docemail','$password')");
	if($sql)
	{
		echo "<script>alert('Thông tin bác sĩ đã được thêm thành công');</script>";
		echo "<script type='text/javascript'> document.location = 'location:Manage-doctors.php'; </script>";

	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Quản trị viên | Thêm bác sĩ</title>
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
<script type="text/javascript">
function valid()
{
 if(document.adddoc.npass.value!= document.adddoc.cfpass.value)
{
alert("Trường Mật khẩu và Xác nhận mật khẩu không khớp !!");
document.adddoc.cfpass.focus();
return false;
}
return true;
}
</script>

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
								<h1 class="mainTitle">Quản trị viên | Thêm bác sĩ</h1>
							</div>
							<ol class="breadcrumb">
								<li>
									<span>Quản trị viên</span>
								</li>
								<li class="active">
									<span>Thêm bác sĩ</span>
								</li>
							</ol>
						</div>
					</section>
					<div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div class="col-md-12">
								<div class="row margin-top-30">
									<div class="col-lg-8 col-md-12">
										<div class="panel panel-white">
											<div class="panel-heading">
												<h5 class="panel-title">Thêm bác sĩ</h5>
											</div>
											<div class="panel-body">
												<form role="form" name="adddoc" method="post" onSubmit="return valid();">
													<div class="form-group">
														<label for="DoctorSpecialization">
															Chuyên môn của bác sĩ
														</label>
														<select name="Doctorspecialization" class="form-control" required="required">
															<option value="">Chọn chuyên môn</option>
															<?php $ret=mysqli_query($connect,"select * from doctorspecilization");
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
															Tên bác sĩ
														</label>
														<input type="text" name="docname" class="form-control"  placeholder="Nhập tên bác sĩ">
													</div>
													<div class="form-group">
														<label for="address">
															Địa chỉ phòng khám của bác sĩ
														</label>
														<textarea name="clinicaddress" class="form-control"  placeholder="Nhập địa chỉ phòng khám của bác sĩ"></textarea>
													</div>
													<div class="form-group">
														<label for="fess">
															Phí tư vấn của bác sĩ
														</label>
														<input type="text" name="docfees" class="form-control"  placeholder="Nhập phí tư vấn của bác sĩ">
													</div>
													<div class="form-group">
														<label for="fess">
															Số điện thoại của bác sĩ
														</label>
														<input type="text" name="doccontact" class="form-control"  placeholder="Nhập số điện thoại của bác sĩ">
													</div>
													<div class="form-group">
														<label for="fess">
															Email của bác sĩ
														</label>
														<input type="email" name="docemail" class="form-control"  placeholder="Nhập địa chỉ Email của bác sĩ">
													</div>
													<div class="form-group">
														<label for="exampleInputPassword1">
															Mật khẩu
														</label>
														<input type="password" name="npass" class="form-control"  placeholder="Mật khẩu mới" required="required">
													</div>
													<div class="form-group">
														<label for="exampleInputPassword2">
															Xác nhận mật khẩu
														</label>
														<input type="password" name="cfpass" class="form-control"  placeholder="Xác nhận mật khẩu" required="required">
													</div>
													<button type="submit" name="submit" class="btn btn-o btn-primary">
														Gửi
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
