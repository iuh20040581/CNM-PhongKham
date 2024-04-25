<?php
    include_once('include/config.php');
    $sql_doctor = mysqli_query($connect,'SELECT bacsi.HotenBS, bacsi.avt, khoa.TenKhoa
                                FROM bacsi INNER JOIN khoa ON bacsi.IDKhoa = khoa.IDKhoa ORDER BY RAND() LIMIT 3')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div class="wrap">
                <div class="content-box">
                    <br><h1>Đội ngũ bác sĩ</h1><br>
                   
                        <div class="section group">
                            <?php while ($row_doctor = mysqli_fetch_array($sql_doctor)) { ?>

                            <div class="col_1_of_3 span_1_of_3 frist">
                                <img class="Doctor" src="<?php echo $row_doctor['avt']; ?>" alt="">
                                <h2><?php echo $row_doctor['HotenBS']; ?></h2>
                                <h4><?php echo $row_doctor['TenKhoa']; ?></h4>
                            </div>  
                            
                            <?php } ?>
                        </div>
                 
                </div>
        </div>
</body>
</html>