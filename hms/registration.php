<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{
    $fname = $_POST['HoTen'];
    $tel = $_POST['SDT'];
    $address = $_POST['DiaChi'];
    $email = $_POST['Email'];
    $gender = $_POST['GioiTinh'];
    $password = md5($_POST['Matkhau']);
    
    // Thêm thông tin người dùng vào cơ sở dữ liệu
    $query = mysqli_query($connect,"INSERT INTO benhnhan (HoTen,SDT,DiaChi,Email,GioiTinh,Matkhau) VALUES ('$fname','$tel','$address','$email','$gender','$password')");
    
    if($query)
    {
        echo "<script>alert('Đăng ký thành công. Bạn có thể đăng nhập ngay bây giờ.');</script>";
        // Chuyển hướng người dùng đến trang user-login.php
        header('location:user-login.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng ký người dùng</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="login">
    <!-- start: REGISTRATION -->
    <div class="row">
        <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="logo margin-top-30">
                <h2>Đăng ký bệnh nhân</h2>
            </div>
            <!-- start: REGISTER BOX -->
            <div class="box-register">
                <form name="registration" id="registration" method="post">
                    <fieldset>
                        <p>
                            Nhập thông tin cá nhân của bạn dưới đây:
                        </p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="HoTen" placeholder="Họ và tên" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="SDT" placeholder="Số điện thoại" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="DiaChi" placeholder="Địa chỉ" required>
                        </div>
                        <div class="form-group">
                            <label class="block">
                                Giới tính
                            </label>
                            <div class="clip-radio radio-primary">
                                <input type="radio" id="Nữ" name="GioiTinh" value="Nữ">
                                <label for="Nữ">
                                    Nữ
                                </label>
                                <input type="radio" id="Nam" name="GioiTinh" value="Nam">
                                <label for="Nam">
                                    Nam
                                </label>
                            </div>
                        </div>
                        <p>
                            Nhập thông tin tài khoản của bạn dưới đây:
                        </p>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="email" class="form-control" name="Email" id="email" onBlur="userAvailability()" placeholder="Email" required>
                                <i class="fa fa-envelope"></i> </span>
                            <span id="user-availability-status1" style="font-size:12px;"></span>
                        </div>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="password" class="form-control" id="password" name="Matkhau" placeholder="Mật khẩu" required>
                                <i class="fa fa-lock"></i> </span>
                        </div>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="password" class="form-control" name="password_again" placeholder="Nhập lại mật khẩu" required>
                                <i class="fa fa-lock"></i> </span>
                        </div>
                        <div class="form-group">
                            <div class="checkbox clip-check check-primary">
                                <input type="checkbox" id="agree" value="agree">
                                <label for="agree">
                                    Tôi đồng ý
                                </label>
                            </div>
                        </div>
                        <div class="form-actions">
                            <p>
                                Đã có tài khoản?
                                <a href="user-login.php">
                                    Đăng nhập
                                </a>
                            </p>
                            <button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
                                Gửi <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </fieldset>
                </form>

                <div class="copyright">
                    &copy; <span class="current-year"></span><span class="text-bold text-uppercase"> HMS</span>. <span>Mọi quyền được bảo lưu</span>
                </div>

            </div>

        </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/login.js"></script>
    <script>
        jQuery(document).ready(function() {
            Main.init();
            Login.init();
        });
    </script>

    <script>
        function userAvailability() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "check_availability.php",
                data: 'Email=' + $("#email").val(),
                type: "POST",
                success: function(data) {
                    $("#user-availability-status1").html(data);
                    $("#loaderI  con").hide();
                },
                error: function() {}
            });
        }
    </script>

</body>
<!-- end: BODY -->

</html>
