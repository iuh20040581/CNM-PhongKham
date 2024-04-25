<?php error_reporting(0);?>
<header class="navbar navbar-default navbar-static-top">
    <!-- Bắt đầu: HEADER THANH NAVIGATION -->
    <div class="navbar-header">
        <a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
            <i class="ti-align-justify"></i>
        </a>
        <a class="navbar-brand" href="#">
            <h2 style="padding-top:2% ">HEARTSTEEL POLYCLINIC</h2>
        </a>
        <a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
            <i class="ti-align-justify"></i>
        </a>
        <a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
            <span class="sr-only">Chuyển đổi điều hướng</span>
            <i class="ti-view-grid"></i>
        </a>
    </div>
    <!-- Kết thúc: HEADER THANH NAVIGATION -->
    <!-- Bắt đầu: COLLAPSE THANH NAVIGATION -->
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-right">
            <!-- Bắt đầu: MESSAGES DROPDOWN -->
            <li  style="padding-top:2% ">
                <h2>HEARTSTEEL POLYCLINIC</h2>
            </li>
            <li class="dropdown current-user">
                <a href class="dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/images/avatar-1.jpg" alt="Peter"> <span class="username">
                        <?php 
                        $query=mysqli_query("select fullName from users where id='".$_SESSION['id']."'");
                        while($row=mysqli_fetch_array($query)) {
                            echo $row['fullName'];
                        }
                        ?>
                        <i class="ti-angle-down"></i></i></span>
                </a>
                <ul class="dropdown-menu dropdown-dark">
                    <li>
                        <a href="edit-profile.php">
                            Hồ sơ của tôi
                        </a>
                    </li>
                    <li>
                        <a href="change-password.php">
                            Thay đổi mật khẩu
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            Đăng xuất
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Kết thúc: USER OPTIONS DROPDOWN -->
        </ul>
        <!-- Bắt đầu: MENU TOGGLER FOR MOBILE DEVICES -->
        <div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
            <div class="arrow-left"></div>
            <div class="arrow-right"></div>
        </div>
        <!-- Kết thúc: MENU TOGGLER FOR MOBILE DEVICES -->
    </div>
    <!-- Kết thúc: COLLAPSE THANH NAVIGATION -->
</header>
