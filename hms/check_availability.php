<?php 
require_once("include/config.php");

if (!empty($_POST["Email"])) {
    $email = $_POST["Email"];
	
    $result = mysqli_query($connect,"SELECT Email FROM benhnhan WHERE   Email='$email'");
    $count = mysqli_num_rows($result);
    
    if ($count > 0) {
        echo "<span style='color:red'> Email đã tồn tại.</span>";
        echo "<script>$('#submit').prop('disabled',true);</script>";
    } else {
        echo "<span style='color:green'> Email có thể sử dụng để đăng ký.</span>";
        echo "<script>$('#submit').prop('disabled',false);</script>";
    }
}
?>
