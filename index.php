
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Heartsteel Policlinic</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {

			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	</head>
	<body>
		<!--start-wrap-->
			<?php
				include_once('hms/header.php');
			?>
		
		<!-- </div> -->
		<!-- <div class="clear"> </div> -->
			<!--start-image-slider---->
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="images/slider1.jpg" alt=""></li>
					      <li><img src="images/slider-image2.jpg" alt=""></li>
					      <li><img src="images/slider-image1.jpg" alt=""></li>
					    </ul>
					
					</div>
					<!--End-image-slider---->
		    <!-- <div class="clear"> </div> -->
		   <div class="wrap">
			<br><h1>Giới thiệu</h1><br>
				<div class="introduce">
					<div class="row">
						<div class="col-md-6">
							<h2>Phòng khám đa khoa Hearsteel</h2>
							<p>Heartsteel Policlinic được thành lập từ năm 2014, tự hào
								với hơn 10 năm kinh nghiệm trong lĩnh vực phòng khám đa khoa, 
								luôn đặc cái tâm, cái đức lên hàng đầu. Với tiêu chí "SỨC KHỎE LÀ VÀNG", Heartsteel Policlinic
								luôn nỗ lực hết sức mình cùng khách hàng để gìn giữ, bảo vệ vốn quý sức khỏe bằng lòng yêu thương, 
								coi sức khỏe của khách hàng như sức sức khỏe bản thân.
							</p>
						</div>
						<div class="col-md-6">
							<img src="images/box-img1.jpg" alt="">
						</div>
					</div>
					
				</div>	
		   </div>
			<?php
				include_once('hms/doctors.php');
			?>
		   <?php
		 		include_once('hms/news.php');  
		   ?>
		   <!-- <div class="clear"> </div> -->
		   <div class="footer">
				<div class="wrap">
					<div class="footer-left">
							<ul>
								<li><h4>Copyright 2024 © Hearsteel Policlinic</h4></li>
							</ul>
					</div>

				<!-- <div class="clear"> </div> -->
				</div>
		   </div>
		<!--end-wrap-->
	</body>
</html>
