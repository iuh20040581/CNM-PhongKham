<?php 
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "db_phongkham";

$connect = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Không thể kết nối tới cơ sở dữ liệu");

if($_GET['action']=='doctorid'){
    $docinfo = $_POST['docinfo'];
    $query = mysqli_query($connect, "SELECT * FROM doctors WHERE doctorName='$docinfo'");
    $array = mysqli_fetch_array($query);
    echo $array['docFees'];
}
?>

