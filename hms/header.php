<?php
    include_once('include/config.php');
    $sql_header = mysqli_query($connect,'SELECT *FROM khoa');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    
</head>
<body>
    <!--start-header-->
	
            <div class="header">
                <div class="top">
                               
                                <ul>
                                    <hr><li><p><span class="glyphicon glyphicon-phone-alt" style="color: #3391E7;"></span> 0374360449</p></li>
                                    <li><p><span class="glyphicon glyphicon-envelope" style="color: #3391E7;"></span> heartsteelpolyclinic@gmail.com</p></li>
                                    <li><p><span class="glyphicon glyphicon-calendar" style="color: #3391E7;"></span> 7h00-24h00 (T2-CN)</p></li>
                                </ul>
                    
                </div>
				
                <div class="wrap">
				<!--start-logo-->
                            <div class="logo">
                                <a href="index.php"><img src="./images/Blue, white and green Medical care logo.png" alt=""></a>
                            </div>

                            <div class="top-nav">
                                <!-- <nav class="navbar navbar"> -->
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="index.php">Trang chủ</a></li>

                                        <li class><a href="hms/book-appointment.php">Đặt lịch khám</a></li>
                                        
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Đội ngũ bác sĩ <span class="caret"></span></a>
                                            <ul class="dropdown-menu" style="background: #3391E7;">
                                                <?php while ($row_header = mysqli_fetch_array($sql_header)) { ?>
                                                    <li><a href="#"><?php echo $row_header['TenKhoa']; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>

                                        <li class><a href="#">Liên hệ</a></li>

                                        <li class><a href="hms/news.php">Tin tức</a></li>

                                        <li class><a href="hms/user-login.php">Đăng nhập</a></li>

                                        <li class><a href="hms/registration.php">Đăng ký</a></li>
                                    </ul>
                                <!-- </nav> -->
                            </div>
                        
                        <!--end-logo-->
                        <!--start-top-nav-->
                        
                    </div>
                </div>    
                <!-- <div class="clear"> </div> -->
				<!--end-top-nav-->
			</div>
			<!--end-header-->
</body>
</html>
