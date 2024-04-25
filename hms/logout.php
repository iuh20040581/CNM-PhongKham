<?php
session_start();
include('include/config.php');

// Thiết lập session login thành rỗng
$_SESSION['login'] = "";

// Lấy ngày và giờ hiện tại theo múi giờ Á Âu/Ấn Độ
date_default_timezone_set('Asia/Kolkata');
$ldate = date('d-m-Y h:i:s A', time());

// Cập nhật bảng userlog với thời gian đăng xuất
mysqli_query($connect,"UPDATE userlog SET logout = '$ldate' WHERE uid = '".$_SESSION['id']."' ORDER BY id DESC LIMIT 1");

// Hủy tất cả các biến session
session_unset();

// Chuyển hướng người dùng đến trang user-login.php
$_SESSION['errmsg'] = "Bạn đã đăng xuất thành công";
?>
<script language="javascript">
    document.location = "./user-login.php";
</script>
