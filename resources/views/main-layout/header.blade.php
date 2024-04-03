<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/index.html   11 Nov 2019 12:16:10 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('pageTitle') - Woodify</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('assetss/images/woodify-fav.png') }}" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assetss/css/plugins.css">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="assetss/css/bootstrap.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assetss/css/style.css">
    <link rel="stylesheet" href="assetss/css/responsive.css">
</head>

<body class="template-index belle template-index-belle">
    <div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value=""
                    placeholder="Search entire store..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
        </div>
    </div>


    <div class="top-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 col-sm-8 col-md-5 col-lg-4">

                    <p class="phone-no">E<span style="text-transform: lowercase;">mail : contact@woodify.com</span></p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                    <div class="text-center">
                        <p class="top-header_middle-text">Woodify - Crafting Dreams into Wooden Reality</p>
                    </div>
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                    <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                    <ul class="customer-links list-inline">
                        @if (Route::has('login'))
                            @auth
                                @if (Auth::user()->role == 'admin')
                                    <li><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>

                                    <li><a href="{{ route('admin.logout') }}">Logout</a></li>
                                @elseif(Auth::user()->role == 'seller')
                                    <li><a href="{{ url('/seller/dashboard') }}">Dashboard</a></li>
                                    <li><a href="{{ route('seller.logout') }}">Logout</a></li>
                                @elseif(Auth::user()->role == 'customer')
                                    <li><a href="{{ url('/customer/dashboard') }}">Dashboard</a></li>
                                    <li><a href="{{ route('customer.logout') }}">Logout</a></li>
                                @endif
                            @else
                                <li><a href="{{ route('register') }}">Create Account</a></li>

                                @if (Route::has('login'))
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                @endif
                            @endauth
                        @endif


                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!--Header-->
    <div class="header-wrap classicHeader animated d-flex">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="{{ url('/') }}">
                        <img src="../assetss/images/woodify-logo.png" alt="Woodify Logo" title="Woodify Logo" />
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                    <div class="d-block d-lg-none">
                        <button type="button"
                            class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                            <i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                    <!--Desktop Menu-->
                    <nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                        <ul id="siteNav" class="site-nav medium center hidearrow">
                            <li class="lvl1 parent megamenu"><a href="{{ url('/') }}"
                                    style="font-size: 1rem;">Home
                                </a>

                            </li>

                            <li class="lvl1 parent megamenu"><a href="{{ route('shop') }}"
                                    style="font-size: 1rem;">Shop </a>
                            </li>

                            <li class="lvl1 parent megamenu"><a href="#" style="font-size: 1rem;">About Us </a>
                            </li>
                            <li class="lvl1 parent dropdown"><a href="#" style="font-size: 1rem;">Contact Us
                                </a>

                            </li>


                        </ul>
                    </nav>
                    <!--End Desktop Menu-->
                </div>
                <!--Mobile Logo-->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                    <div class="logo">
                        <a style="color: brown; font-size: 2rem;text-decoration: none; font-weight: bold"
                            href="{{ url('/') }}">
                            Woodify
                        </a>
                    </div>
                </div>
                <!--Mobile Logo-->

                <div class="col-4 col-sm-3 col-md-3 col-lg-2 ">
                    {{-- @if (Auth::check() && Auth::user()->role == 'customer')
                        <div class="site-cart">
                            <a href="#;" class="site-header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>

                            </a>

                        </div>
                    @endif --}}

                    @if (Route::has('login'))
                        @auth
                            @if (Auth::user()->role == 'admin')
                                <div class="site-cart">
                                    <a href="{{ route('admin.logout') }}" title="Log Out"><i class="icon fa fa-power-off"
                                            style="font-size: 1.5rem;"></i></a>

                                </div>
                            @elseif(Auth::user()->role == 'seller')
                                <div class="site-cart">
                                    <a href="{{ route('seller.logout') }}" title="Log Out">
                                        <i class="icon fa fa-power-off" style="font-size: 1.5rem;"></i>

                                    </a>

                                </div>
                            @elseif(Auth::user()->role == 'customer')
                                <div class="site-cart">
                                    <a href="{{ route('cart') }}" title="Cart">
                                        <i class="icon fa fa-shopping-cart" style="font-size: 1.5rem;"></i>

                                    </a>

                                </div>
                            @endif
                        @else
                            <div class="site-cart">
                                <a href="{{ route('login') }}" title="Log In">
                                    <i class="icon fa fa-sign-in" style="font-size: 1.5rem;"></i>

                                </a>

                            </div>
                        @endauth
                    @endif
                    <div class="site-header__search">
                        <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End Header-->
    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
        <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
            <li class="lvl1 parent megamenu"><a href="{{ url('/') }}">Home </a>

            </li>
            <li class="lvl1 parent megamenu"><a href="{{ route('shop') }}">Shop </a>

            </li>
            <li class="lvl1 parent megamenu"><a href="#">About Us </a>

            </li>
            <li class="lvl1 parent megamenu"><a href="#">Contact Us </a>

            </li>


        </ul>
    </div>
    <!--End Mobile Menu-->

    @yield('mainpage')

    @include('main-layout.footer')

    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>

    <!-- Including Jquery -->
    <script src="assetss/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assetss/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assetss/js/vendor/jquery.cookie.js"></script>
    <script src="assetss/js/vendor/wow.min.js"></script>
    <!-- Including Javascript -->
    <script src="assetss/js/bootstrap.min.js"></script>
    <script src="assetss/js/plugins.js"></script>
    <script src="assetss/js/popper.min.js"></script>
    <script src="assetss/js/lazysizes.js"></script>
    <script src="assetss/js/main.js"></script>

</body>

</html>
