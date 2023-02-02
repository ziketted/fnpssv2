<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Fnpss</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Fnpss admin" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">

    <link href="{{asset('assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/fixedHeader.bootstrap4.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('assets/plugins/datatables/scroller.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('assets/plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}"
        rel="stylesheet" />

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body class="fixed-left">


    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="index.html" class="logo"><img src="{{asset('assets/images/logo-dark.png')}}" alt=""
                            height="24"></a>
                    <a href="index.html" class="logo-sm"><img src="{{asset('assets/images/logo-sm.png')}}" alt=""
                            height="28"></a>
                </div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search float-left">
                            <form role="search" class="navbar-form">
                                <input type="text" placeholder="Search..." class="form-control search-bar">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                    <ul class="nav navbar-right float-right list-inline">
                        <li class="dropdown d-none d-sm-block">
                            <a href="#" data-target="#"
                                class="dropdown-toggle waves-effect waves-light notification-icon-box"
                                data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-bell"></i> <span class="badge badge-xs badge-danger"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg">
                                <li class="text-center notifi-title">Notification <span
                                        class="badge badge-xs badge-success">3</span></li>
                                <li class="list-group">
                                    <a href="javascript:void(0);" class="dropdown-item notify-item mt-2">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details">Your order is placed<span class="text-muted">Dummy
                                                text of the printing and typesetting industry.</span></p>
                                    </a>
                                    <!-- item-->

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                        <p class="notify-details">Your item is shipped<span class="text-muted">It is a
                                                long established fact that a reader will</span></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item mb-2">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i>
                                        </div>
                                        <p class="notify-details">New Message received<span class="text-muted">You have
                                                87 unread messages</span></p>
                                    </a>

                                    <!-- last list item -->
                                    <a href="javascript:void(0);" class="list-group-item text-center">
                                        <small class="text-primary mb-0">View all </small>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="d-none d-sm-block">
                            <a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box"><i
                                    class="fas fa-expand"></i></a>
                        </li>

                        <li class="dropdown">
                            <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown"
                                aria-expanded="true">
                                <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user-img"
                                    class="rounded-circle">
                                <span class="profile-username">
                                    {{Auth::user()->name}} <span class="mdi mdi-chevron-down font-15"></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)" class="dropdown-item"> Profile</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item"><span
                                            class="badge badge-success float-right">5</span> Settings </a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item"> Lock screen</a></li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();" class="dropdown-item">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">


                <!--- Divider -->

                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Menu principal</li>

                        <li>
                            <a href="{{route('dashboard')}}" class="waves-effect"><i class="ti-home"></i><span> Tableau
                                    de bord
                        </li>

                        <li>
                            <a href="{{route('enrolement.index')}}" class="waves-effect"><i
                                    class="ion ion-ios-folder-open"></i><span> Requerants
                                </span></a>
                        </li>

                        <li>
                            <a href="{{route('convention.index')}}" class="waves-effect"><i class="ti-bell"></i><span>
                                    Notifications
                                </span></a>
                        </li>





                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->