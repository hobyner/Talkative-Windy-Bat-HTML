<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="AngelInvest" content="AngelInvest" />

    <!-- Stylesheets
    ============================================= -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Zilla+Slab:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <!-- Furniture Specific Stylesheet-->
    <link rel="stylesheet" href="{{asset('css/colors.php?color=193532')}}" type="text/css" />

    <!-- Furniture Specific Stylesheet -->
    <link rel="stylesheet" href="{{asset('demos/furniture/furniture.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('demos/furniture/css/fonts.css')}}" type="text/css" />
    <!-- / -->

    <!-- Invest Cards Stylesheet-->
    <link rel="stylesheet" href="{{asset('demos/car/style.css')}}" type="text/css" />
    <!-- / -->


    <!-- Document Title
    ============================================= -->
    <title>AngelInvest</title>

</head>




    <body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header" class="full-header header-size-sm">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">


                        <!-- Logo
                    ============================================= -->
                        <div id="logo">
                            <a href="{{route('landing')}}" class="standard-logo"><img src="{{asset('img/logo.png')}}" alt="Logo"></a>
                            <a href="{{route('landing')}}" class="retina-logo"><img src="{{asset('img/logo.png')}}" alt="Logo"></a>
                        </div><!-- #logo end -->

                        <div class="header-misc">

                            <!-- Top Search
                            ============================================= -->
                            <div id="top-search" class="header-misc-icon">
                                <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                            </div><!-- #top-search end -->

                            @auth
                            <div class="dropdown mx-3 me-lg-0">
                                <a href="#" class="btn btn-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon-user"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item text-start" href="#">{{auth()->user()->email}}</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-start" href="{{route('profile')}}">Profile</a>
                                    <a class="dropdown-item text-start" href="{{route('wallet')}}">Wallet</a>
{{--                                    <a class="dropdown-item text-start" href="{{route('messages')}}">Messages <span class="badge rounded-pill bg-secondary float-end" style="margin-top: 3px;">5</span></a>--}}
                                    <a class="dropdown-item text-start" href="{{route('messages')}}">Messages </a>
                                    <div class="dropdown-divider"></div>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                    <a class="dropdown-item text-start" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout <i class="icon-signout"></i>
                                    </a>
                                </ul>
                            </div>
                            @else
                            <div class="mx-3 me-lg-0">
                                <a href="{{route('login')}}">
                                    <button type="button" class="btn btn-success btn-md"><b>LOGIN</b></button>
                                </a>
                            </div>
                            @endauth
                        </div>

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                        </div>

                        <!-- Primary Navigation
                        ============================================= -->
                        <nav class="primary-menu">

                            <ul class="menu-container">
                                @auth
                                    <li class="menu-item">
                                        <a class="menu-link" href="#"><div>Dashboard</div></a>

                                        <!-- Menu Sub DropDown
                                        ============================================= -->
                                        <ul class="sub-menu-container mega-menu-dropdown">
                                            <li class="menu-item">
                                                <a class="menu-link" href="#"><div>My Pitches</div></a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="menu-link" href="#"><div>My Investors</div></a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="menu-link" href="#"><div>Investor Search</div></a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="menu-link" href="#"><div>News Feed</div></a>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    <li class="menu-item">
                                        <a class="menu-link" href="{{route('login')}}">
                                            <div>Dashboard</div>
                                        </a>
                                    </li>
                                @endauth
                                <li class="menu-item">
                                    <a class="menu-link" href="{{asset('pitch')}}">
                                        <div>Fundraise</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{asset('invest')}}">
                                        <div>Invest</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{route('help')}}">
                                        <div>Help</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{route('contact')}}">
                                        <div>Contact Us</div>
                                    </a>
                                </li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                        <form class="top-search-form" action="#" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                        </form>

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->
