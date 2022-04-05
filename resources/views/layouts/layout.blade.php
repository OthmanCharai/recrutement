<!DOCTYPE html>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="candidates, career, employment, freelance, glassdoor, Human Resource Management, indeed, job board, job listing, job portal, job postings, jobs, listings, recruitment, resume">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
<!-- Title -->
<title>CareerUp - The Most Popular Job Board HTML Template</title>
<!-- Favicon -->
<link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />

</head>
<body>
    <div class="wrapper">
        <div class="preloader"></div>

        <!-- Main Header Nav -->
        <header class="header-nav style_one navbar-scrolltofixed main-menu">
            <div class="container">
                <!-- Ace Responsive Menu -->
                <nav>
                    <!-- Menu Toggle btn-->
                    <div class="menu-toggle">
                        <img class="nav_logo_img img-fluid" src="{{ asset('images/header-logo.png') }}" alt="header-logo.png">
                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a href={{ route('home') }}" class="navbar_brand float-left dn-smd">
                        <img class="img-fluid mt10" src="{{ asset('images/header-logo.png') }}" alt="header-logo.png">
                    </a>
                    <!-- Responsive Menu Structure-->
                    <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                    <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                        <li>
                            <a href="{{ route('home') }}"><span class="title">Home</span></a>
                            <!-- Level Two-->

                        </li>
                        <li>
                            <a href="#"><span class="title">Find A Job</span></a>
                            <!-- Level Two-->

                        </li>
                        <li>
                            <a href="#"><span class="title">Employer</span></a>
                            <!-- Level Two-->

                        </li>
                        <li>
                            <a href="{{ route('candidate.index') }}"><span class="title">Candidates</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="title">Pages</span></a>

                        </li>
                    </ul>
                    <ul class="sign_up_btn pull-right dn-smd mt10">
                        @auth
                            @if(Auth::user()->user_type=="candidate")
                            <li><a href="{{ route('candidate.dashboard') }}" class="btn btn-md" >Dashboard</a></li>
                            @else
                            <li><a href="{{ route('employe.dashboard') }}" class="btn btn-md" >Dashboard</a></li>

                            @endif
                        @endauth
                        @guest
                            <li><a href="{{ route('login') }}" class="btn btn-md" >Log<span class="dn-md">in</span>/Reg<span class="dn-md">ister</span></a></li>
                        @endguest
                    </ul><!-- Button trigger modal -->
                </nav>
                <!-- End of Responsive Menu -->
            </div>
        </header>
        <!-- Main Header Nav For Mobile -->
  <div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
        <div class="header stylehome1">
            <img class="nav_logo_img img-fluid float-left mt25" src="images/header-logo.png" alt="header-logo.png">
            <a class="bg-thm" href="#menu"><span></span></a>
        </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
        <ul>
            <li><span>Home</span>

            </li>
            <li><span>Find A Job</span>
                <ul>
                    <li><span>Job List</span>

                    </li>
                    <li><span>Job Single</span>

                    </li>
                </ul>
            </li>
            <li><span>Employer</span>

            </li>
            <li><span>Candidates</span>

            </li>
            <li><a class="text-thm" href="{{ route('login') }}">Login/Register</a></li>
        </ul>
        </nav>
    </div>
        @yield('content')

    <a class="scrollToHome text-thm" href="#"><i class="flaticon-rocket-launch"></i></a>
    </div>
    <!-- Wrapper End -->

<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ace-responsive-menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/snackbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/simplebar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/parallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scrollto.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.counterup.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/progressbar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/timepicker.js') }}"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@yield('afterJs')
</body>
</html>
