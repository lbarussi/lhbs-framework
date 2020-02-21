<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <?php ob_start(); ?>
    <title>%TITLE%</title>
    <?php $buffer = ob_get_contents();
    ob_end_clean(); ?>
    <link rel="apple-touch-icon" href="<?php echo $base; ?>/assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base; ?>/assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="apple-touch-icon" href="<?php echo $base; ?>/assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base; ?>/assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>/assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>/assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>/assets/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>/assets/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>/assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>/assets/vendors/data-tables/css/select.dataTables.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>/assets/css/themes/vertical-dark-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>/assets/css/themes/vertical-dark-menu-template/style.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>/assets/css/pages/data-tables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>/assets/css/pages/intro.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>/assets/css/custom/custom.css">


</head>
<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">
<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light">
            <div class="nav-wrapper">
                <ul class="navbar-list right">
                    <li class="hide-on-large-only search-input-wrapper">
                        <a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);">
                            <i class="material-icons">search</i>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown">
                            <i class="material-icons">notifications_none
                                <small class="notification-badge">5</small>
                            </i>
                        </a>
                    </li>
                    <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown">
                            <span class="avatar-status avatar-online">
                                <img src="<?php echo $base; ?>/assets/images/avatar/avatar-7.png" alt="avatar">
                                <i></i>
                            </span>
                        </a>
                    </li>
                </ul>
                <ul class="dropdown-content" id="notifications-dropdown">
                    <li>
                        <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
                    </li>
                    <li class="divider"></li>
                    <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                    </li>
                    <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                    </li>
                    <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                    </li>
                    <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                    </li>
                    <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                    </li>
                </ul>

                <ul class="dropdown-content" id="profile-dropdown">
                    <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
                    <li><a class="grey-text text-darken-1" href="app-chat.html"><i class="material-icons">chat_bubble_outline</i> Chat</a></li>
                    <li><a class="grey-text text-darken-1" href="page-faq.html"><i class="material-icons">help_outline</i> Help</a></li>
                    <li class="divider"></li>
                    <li><a class="grey-text text-darken-1" href="user-lock-screen.html"><i class="material-icons">lock_outline</i> Lock</a></li>
                    <li><a class="grey-text text-darken-1" href="user-login.html"><i class="material-icons">keyboard_tab</i> Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img class="hide-on-med-and-down " src="<?php echo $base; ?>/assets/images/logo/materialize-logo.png" alt="materialize logo"/><img class="show-on-medium-and-down hide-on-med-and-up" src="<?php echo $base; ?>/assets/images/logo/materialize-logo-color.png" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
        <li class="bold">
            <a class="waves-effect waves-cyan " href="app-email.html">
                <i class="material-icons">dashboard</i>
                <span class="menu-title" data-i18n="Mail">Dashboard</span>
            </a>
        </li>
        <li class="bold <?php echo strpos($_SERVER['REQUEST_URI'], 'cadastros') !== false ? 'active open' : null?>">
            <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">add</i>
                <span class="menu-title" data-i18n="Dashboard">Cadastros</span>
            </a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="<?php echo strpos($_SERVER['REQUEST_URI'], 'categorias') !== false ? 'active' : null?>">
                        <a href="<?php echo route('view.listCategorias')?>" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'categorias') !== false ? 'active' : null?>"><i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Categorias</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Applications</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="Menu levels">Menu levels</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level">Second level</span></a>
                    </li>
                    <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level child">Second level child</span></a>
                        <div class="collapsible-body">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Third level">Third level</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>

<div id="main">
    <div class="row">
        <div class="col s12">
            <div class="row">
                <div class="col s12">
                    <?php
                    if(isset($_SESSION['success'])){
                        ?>
                        <div class="card-alert card green">
                            <div class="card-content white-text">
                                <p><i class="material-icons">check_circle</i> <?php echo $_SESSION['success']; ?></p>
                            </div>
                        </div>
                        <?php
                        unset($_SESSION['success']);
                    }else if(isset($_SESSION['error'])){
                        ?>
                        <div class="card-alert card red">
                            <div class="card-content white-text">
                                <p><i class="material-icons">error</i> <?php echo $_SESSION['error']; ?></p>
                            </div>
                        </div>
                        <?php
                        unset($_SESSION['error']);
                    }
                    ?>
                </div>
            </div>
        </div>
                <?php include_once '../View/' . $view . '.php';
                $buffer = str_replace("%TITLE%", '', $buffer);
                echo $buffer;
                ?>
<!--                <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>-->
<!--                    <ul>-->
<!--                        <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>-->
<!--                        <li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>-->
<!--                        <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>-->
<!--                        <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>-->
<!--                    </ul>-->
<!--                </div>-->
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
</div>

<footer class="page-footer footer footer-static footer-light navbar-border navbar-shadow">
    <div class="footer-copyright">
        <div class="container"><span>&copy; 2020          <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a href="https://pixinvent.com/">PIXINVENT</a></span></div>
    </div>
</footer>

<script src="<?php echo $base; ?>/assets/js/vendors.min.js"></script>

<script src="<?php echo $base; ?>/assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $base; ?>/assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $base; ?>/assets/vendors/data-tables/js/dataTables.select.min.js"></script>

<script src="<?php echo $base; ?>/assets/js/plugins.min.js"></script>
<script src="<?php echo $base; ?>/assets/js/search.min.js"></script>
<script src="<?php echo $base; ?>/assets/js/custom/custom-script.min.js"></script>

<script src="<?php echo $base; ?>/assets/js/scripts/intro.min.js"></script>
<script src="<?php echo $base; ?>/assets/vendors/jquery-validation/jquery.validate.min.js"></script>

<script src="<?php echo $base; ?>/assets/js/scripts/data-tables.min.js"></script>


<script>
    $(document).ready(function () {
        Inside.init();
    });
</script>
</body>
</html>