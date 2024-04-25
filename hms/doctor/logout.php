<?php
session_start();
include('include/config.php');
$_SESSION['dlogin'] = ""; // Gán giá trị rỗng cho biến phiên đăng nhập của bác sĩ
date_default_timezone_set('Asia/Kolkata'); // Đặt múi giờ mặc định cho châu Á/Kolkata
$ldate = date('d-m-Y h:i:s A', time()); // Lấy ngày và giờ hiện tại
mysqli_query($connect,"UPDATE doctorslog  SET logout = '$ldate' WHERE uid = '".$_SESSION['id']."' ORDER BY id DESC LIMIT 1"); // Cập nhật ngày giờ logout vào bảng logs của bác sĩ
session_unset(); // Xóa tất cả các biến phiên
//session_destroy(); // Hủy phiên
$_SESSION['errmsg'] = "Bạn đã đăng xuất thành công"; // Thiết lập thông báo đăng xuất thành công
?>
<script language="javascript">
document.location = "index.php"; // Chuyển hướng trình duyệt đến trang index.php sau khi đăng xuất
</script>
