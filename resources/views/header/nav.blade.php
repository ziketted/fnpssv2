<div class="header-bg">
    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">

                <!-- Logo-->
                <div>
                    <a href="{{url('/home')}}" class="logo">
                       <img src="assets/images/logo-light.png" class="logo-lg" alt="" height="26">
                        <img src="assets/images/logo-sm.png" class="logo-sm" alt="" height="28">
                    </a>
                </div>
                <!-- End Logo-->

                <div class="menu-extras topbar-custom navbar p-0">


                    <ul class="mb-0 nav navbar-right ml-auto list-inline">


                        <li class="list-inline-item notification-list d-none d-sm-inline-block">
                            <a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box"><i class="fas fa-expand"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="rounded-circle">
                                <span class="profile-username">
                                                            {{auth()->user()->name}} <span class="mdi mdi-chevron-down font-15"></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>  <form method="POST" action="{{ route('logout') }}">
                                    @csrf


                                      <button type="submit" class="btn btn-lg-info">{{ __('Déconnecter') }}</button>
                                </form></li>

                            </ul>
                        </li>

                        <li class="menu-item dropdown notification-list list-inline-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                    </ul>

                </div>
                <!-- end menu-extras -->

                <div class="clearfix"></div>

            </div>
            <!-- end container -->
        </div>
        <!-- end topbar-main -->

        <!-- MENU Start -->
        <div class="navbar-custom">
            <div class="container-fluid">

                <div id="navigation">

                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <?php $role= Auth::user()->role;
                        if($role==1){
                ?>
                        <li class="has-submenu">
                            <a href="{{url('/home')}}"><i class="ti-home"></i> Tableau de bord </a>
                        </li>

                        <li class="">
                            <a href="{{route('depense.index')}}"><i class="ti-briefcase"></i> Opérations </a>
                        </li>

                        <li class="">
                            <a href="{{route('depense.show')}}"><i class="ti-harddrives"></i> Rapports </a>

                        </li>
                        <?php

                }

                 if($role==2){
                    ?>
                     <li class="has-submenu">
                        <a href="{{url('/home')}}"><i class="ti-home"></i> Tableau de bord </a>
                    </li>
                        <li class="">
                            <a href="{{route('validation.index')}}"><i class="ti-harddrives"></i> A valider </a>

                        </li>

                        <?php

                } ?>
                    </ul>
                    <!-- End navigation menu -->
                </div>
                <!-- end #navigation -->
            </div>
            <!-- end container -->
        </div>
        <!-- end navbar-custom -->
    </header>
    <!-- End Navigation Bar-->

</div>
