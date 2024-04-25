<?php
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "ingram";

// Kết nối tới MySQLi
$DB_con = mysqli_connect($DB_host, $DB_user, $DB_pass, $DB_name);

// Kiểm tra kết nối
if (mysqli_connect_errno()) {
    echo "Lỗi kết nối: " . mysqli_connect_error();
    exit();
}

// Thiết lập kiểu kết quả trả về từ MySQLi
mysqli_set_charset($DB_con, "utf8");

// Bạn có thể thiết lập các thuộc tính khác của kết nối ở đây nếu cần

// Nếu bạn muốn sử dụng $DB_con ở nơi khác trong mã của bạn, hãy sử dụng `global $DB_con;`

// Ví dụ:
// function someFunction() {
//     global $DB_con;
//     // Bạn có thể sử dụng $DB_con ở đây
// }

// Lưu ý: Để đóng kết nối MySQLi, bạn có thể sử dụng hàm mysqli_close($DB_con);

?>