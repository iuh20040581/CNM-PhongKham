<?php
    include_once('include/config.php');
    $sql_news = mysqli_query($connect,'SELECT * FROM tintuc');
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
            <h1>Tin tức</h1><br>
            <div class="news">
                <div class = "row">
                    <?php while ($row_news = mysqli_fetch_array($sql_news)) { ?>
                        <div class = "col-lg-4">
                            <a href="#">
                                <img style="width: 500px; height: 300px" src="<?php echo $row_news['avt']?>" alt="">
                                <h3 style="color: black"><?php echo $row_news['tieude']?></h3>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
</body>
</html>