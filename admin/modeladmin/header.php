<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin</title>
    <!-- Custom CSS -->
    <link href="./style/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="./style/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="./style/accordion.css">
</head>

<body id="body">

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">

                    <a class="navbar-brand" href="dashboard.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="../img/logo-icon.png" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../img/logo-text.png" alt="homepage" />
                        </span>
                    </a>

                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <a href="../customer/logout_user.php" class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Đăng Xuất
                        </a>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="../img/<?php
                                                    if (isset($_SESSION["user"])) {
                                                        echo $_SESSION["user"]['userImage'];
                                                    } else {
                                                        echo "avartar.jpg";
                                                    }
                                                    ?>" alt="user-img" width="36" class="img-circle">
                                <span class="text-white font-medium">Hi <?php echo $_SESSION["user"]['userName'] ?></span></a>
                        </li>

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav accordionPanelsStayOpenExample" class="accordion">
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/WEB17301/du_an_1/admin/index.php?act=trangchu" aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Trang Chủ</span>
                            </a>
                        </li>
                        <!-- quản lí tài khoản -->
                        <li class="sidebar-item">
                            <button class="accordion">
                                <div class="title">
                                    <i class="fa fa-user i" aria-hidden="true"></i>
                                    <span class="hide-menu">Tài Khoản</span>
                                </div>
                            </button>
                            <div class="panel">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link box-menu first" href="http://localhost/WEB17301/du_an_1/admin/index.php?act=khachhang">

                                    <span class="hide-menu">Quản lí Tài Khoản</span>
                                </a>

                                <a class="sidebar-link waves-effect waves-dark sidebar-link box-menu" href="http://localhost/WEB17301/Du_an_1/admin/index.php?act=addkh">

                                    <span class="hide-menu">Thêm mới tài khoản</span>
                                </a>
                            </div>
                        </li>
                        <!-- quản lí sản phẩm -->
                        <li class="sidebar-item">
                            <button class="accordion">
                                <div class="title">
                                    <i class="fa fa-table i" aria-hidden="true"></i><span class="hide-menu">Sản Phẩm</span>
                                </div>
                            </button>
                            <div class="panel">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link box-menu first " href="http://localhost/WEB17301/du_an_1/admin/index.php?act=khachhang">


                                    <span class="hide-menu">Quản lí Sản Phẩm</span>
                                </a>

                                <a class="sidebar-link waves-effect waves-dark sidebar-link box-menu" href="http://localhost/WEB17301/Du_an_1/admin/index.php?act=addsp">

                                    <span class="hide-menu">Thêm mới sản phẩm</span>
                                </a>
                            </div>
                        </li>

                        <!-- quản lí đơn hàng -->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/WEB17301/du_an_1/admin/index.php?act=donhang" aria-expanded="false">
                                <i class="fa-solid fa-cart-shopping "></i>
                                <span class="hide-menu">Đơn Hàng</span>
                            </a>
                        </li>
                        <!-- quản lí danh mục -->
                        <li class="sidebar-item">
                            <button class="accordion">
                                <div class="title">
                                    <i class="fa fa-font i" aria-hidden="true"></i>
                                    <span class="hide-menu">Danh Mục</span>
                                </div>
                            </button>
                            <div class="panel">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link box-menu first" href="http://localhost/WEB17301/du_an_1/admin/index.php?act=loaihang">


                                    <span class="hide-menu">Quản lí danh mục</span>
                                </a>

                                <a class="sidebar-link waves-effect waves-dark sidebar-link box-menu" href="http://localhost/WEB17301/Du_an_1/admin/index.php?act=addlh">

                                    <span class="hide-menu">Thêm mới danh mục</span>
                                </a>
                            </div>
                            <!-- địa chỉ -->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/WEB17301/du_an_1/admin/index.php?act=diachi" aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">Địa Chỉ</span>
                            </a>
                        </li>
                        <!-- quản lí bình luận -->
                        <li class="sidebar-item">
                            <button class="accordion">
                                <div class="title">
                                    <i class="fa fa-columns i" aria-hidden="true"></i>
                                    <span class="hide-menu">Bình Luận</span>
                                </div>
                            </button>
                            <div class="panel">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link box-menu first" href="http://localhost/WEB17301/du_an_1/admin/index.php?act=binhluan">


                                    <span class="hide-menu">Quản lí bình luật sản phẩm</span>
                                </a>

                                <a class="sidebar-link waves-effect waves-dark sidebar-link box-menu" href="http://localhost/WEB17301/Du_an_1/admin/index.php?act=binhluan_blog">

                                    <span class="hide-menu">Quản lí bình luật bài viết</span>
                                </a>
                            </div>
                        </li>


                    </ul>

                </nav>
        </aside>