<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<?php
    if(empty(session('OwnerId'))){
        ?>
        <script type="text/javascript">
            window.location.href='<?php echo base_url(); ?>/owner/login';
        </script>
        <?php
    }
    if(session('Type')!=1 && $active=='staff'){
        ?>
        <script type="text/javascript">
            window.location.href='<?php echo base_url(); ?>/owner/login';
        </script>
        <?php
    }
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="Lobby">
    <title>Lobby</title>
    <link rel="apple-touch-icon" href="<?= base_url('public/owner/app-assets/images/ico/apple-icon-120.png') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('public/owner/app-assets/images/ico/favicon.ico') ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/owner/app-assets/vendors/css/vendors.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/owner/app-assets/vendors/css/tables/datatable/datatables.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/owner/app-assets/vendors/css/extensions/sweetalert2.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/owner/app-assets/vendors/css/animate/animate.css') ?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/owner/app-assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/owner/app-assets/css/bootstrap-extended.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/owner/app-assets/css/colors.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/owner/app-assets/css/components.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/owner/app-assets/css/themes/dark-layout.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/owner/app-assets/css/themes/semi-dark-layout.css') ?>">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/owner/app-assets/css/core/menu/menu-types/vertical-menu.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/owner/app-assets/css/core/colors/palette-gradient.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/owner/app-assets/css/plugins/forms/validation/form-validation.css') ?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css') ?>">
    <!-- END: Custom CSS-->

    <style type="text/css">
        .delete-data{
            cursor: pointer;
            color: #7367F0;
        }
        .upload-images{
            width: 150px;
            height: 150px;
            padding-left: 10px;
            overflow: hidden;
            position: relative; 
        }
        .upload-images .image-block{
            position:absolute;
            width: 100%;
            height: 100%;
            z-index: 9;
        }
        .upload-images .upload_input{
            position:absolute;
            z-index:10;
            padding-top: 160px;
            outline: none;
        }

    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    
                        <ul class="nav navbar-nav">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">5 New</h3><span class="notification-title">App Notifications</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                            <div class="media-body">
                                                <h6 class="primary media-heading">You have new order!</h6><small class="notification-text"> Are your going to meet me tonight?</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                                            <div class="media-body">
                                                <h6 class="success media-heading red darken-1">99% Server load</h6><small class="notification-text">You got new order of goods.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                            <div class="media-body">
                                                <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small class="notification-text">Server have 99% CPU usage.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                                            <div class="media-body">
                                                <h6 class="info media-heading">Complete the task</h6><small class="notification-text">Cake sesame snaps cupcake</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                                            <div class="media-body">
                                                <h6 class="warning media-heading">Generate monthly report</h6><small class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">View all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"><?php echo session('FirstName')." ".session('LastName'); ?></span><span class="user-status">Available</span></div><span><img class="round" src="<?= base_url('public/owner/images/owner') ?><?php echo "/".session('ProfilePic') ?>" alt="Profile" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="<?= base_url('owner/profile') ?>"><i class="feather icon-user"></i> Edit Profile</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= base_url('owner/logout') ?>"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?= base_url('owner/staff') ?>">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Lobby</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span>Manage</span>
                <li class="<?php if(!empty($active) && $active=='job'){ echo 'active'; } ?> nav-item"><a href="<?= base_url('owner/job') ?>"><i class="feather icon-check-square"></i><span class="menu-title">Manage Jobs</span></a>
                </li>
                <li class="<?php if(!empty($active) && $active=='flightblog'){ echo 'active'; } ?> nav-item"><a href="<?= base_url('owner/flightblog') ?>"><i class="feather icon-list"></i><span class="menu-title">Manage Flight Blogs</span></a>
                </li>
                <li class="<?php if(!empty($active) && $active=='feedback'){ echo 'active'; } ?> nav-item"><a href="<?= base_url('owner/feedback') ?>"><i class="feather icon-thumbs-up"></i><span class="menu-title">Manage Feedback</span></a>
                </li>
                <li class=" navigation-header"><span>Category</span>
                <li class="<?php if(!empty($active) && $active=='maincate'){ echo 'active'; } ?> nav-item"><a href="<?= base_url('owner/maincate') ?>"><i class="feather icon-layers"></i><span class="menu-title">Main Category</span></a>
                </li>
                <li class="<?php if(!empty($active) && $active=='subcate'){ echo 'active'; } ?> nav-item"><a href="<?= base_url('owner/subcate') ?>"><i class="feather icon-grid"></i><span class="menu-title">Sub Category</span></a>
                </li>
                <li class="<?php if(!empty($active) && $active=='question'){ echo 'active'; } ?> nav-item"><a href="<?= base_url('owner/question') ?>"><i class="feather icon-help-circle"></i><span class="menu-title">Category Question</span></a>
                </li>
                <li class=" navigation-header"><span>Users</span>
                </li>
                <?php
                if(session('Type')==1){
                ?>
                <li class="<?php if(!empty($active) && $active=='staff'){ echo 'active'; } ?> nav-item"><a href="<?= base_url('owner/staff') ?>"><i class="feather icon-users"></i><span class="menu-title">Manage Staff</span></a>
                </li>
                <?php
                }
                ?>
                <li class="<?php if(!empty($active) && $active=='customer'){ echo 'active'; } ?> nav-item"><a href="<?= base_url('owner/customer') ?>"><i class="feather icon-users"></i><span class="menu-title">Manage Customer</span></a>
                </li>
                <li class="<?php if(!empty($active) && $active=='profile'){ echo 'active'; } ?> nav-item"><a href="<?= base_url('owner/profile') ?>"><i class="feather icon-edit"></i><span class="menu-title">Edit Profile</span></a>
                </li>
                <li class="<?php if(!empty($active) && $active=='changepass'){ echo 'active'; } ?> nav-item"><a href="<?= base_url('owner/changepass') ?>"><i class="feather icon-lock"></i><span class="menu-title">Change Password</span></a>
                </li>
                <li class=" nav-item"><a href="<?= base_url('owner/logout') ?>"><i class="feather icon-power"></i><span class="menu-title">Logout</span></a>
                </li>
            
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
