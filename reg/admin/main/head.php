<?php
session_start();
if (!isset($_SESSION['admin']) and !isset($_SESSION['pass'])) {
    echo "<script>location.replace(`index.php`)</script>";
}
if ($_SESSION['admin'] != 'admin' and $_SESSION['pass'] != 'admin332') {
    echo "<script>location.replace(`index.php`)</script>";
}
?>


<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | CreateCap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap-dark.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app-dark.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Custom Css -->
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm-dark.png" alt="logo-sm-dark" height="32">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="logo-dark" height="20">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm-light.png" alt="logo-sm-light" height="32">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="logo-light" height="20">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="ri-menu-2-line align-middle"></i>
                    </button>



                </div>

                <div class="d-flex">



                    <div class="dropdown d-inline-block user-dropdown">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-2.jpg" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1">CreateCap</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <a class="dropdown-item text-danger" href="logout.php"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="ri-settings-2-line"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>

                        </li>

                        <li><a href="dash.php" class="waves-effect">
                                <i class="ri-dashboard-line"></i>
                                <span> Dashboard</span>
                            </a></li>
                        <li><a href="firm.php">
                                <i class="ri-stack-fill"></i>

                                <span> Firm</span></a>
                        </li>
                        <li><a href="invest.php">
                                <i class="ri-stack-line"></i>
                                <span>Investor</span>
                            </a></li>
                        <!-- <li><a href="logout.php">
                                <i class="ri-calendar-2-line"></i>
                                <span>Logout</span> </a>
                        </li> -->
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <script src="assets/libs/jquery/jquery.min.js"></script>