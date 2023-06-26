<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sobo Aksi</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('trusthand/assets/images/logo.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('trusthand/assets/css/font-awesome-all.css')}}" rel="stylesheet">
    <link href="{{ asset('trusthand/assets/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{ asset('trusthand/assets/css/owl.css')}}" rel="stylesheet">
    <link href="{{ asset('trusthand/assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('trusthand/assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('trusthand/assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('trusthand/assets/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{ asset('trusthand/assets/css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{ asset('trusthand/assets/css/jquery.bootstrap-touchspin.css')}}" rel="stylesheet">
    <link href="{{ asset('trusthand/assets/css/color.css')}}" rel="stylesheet">
    <link href="{{ asset('trusthand/assets/css/elpath.css')}}" rel="stylesheet">
    <link href="{{ asset('trusthand/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('trusthand/assets/css/responsive.css')}}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/bb9305debb.js" crossorigin="anonymous"></script>   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />



    @vite([])
    @livewireStyles
    @stack('css')

    <style>
        .sidebar {
            /* background-color: #ececec; */
            width: 900px;
            /*overflow-x: scroll;
                overflow-y: hidden;
                white-space: nowrap;*/
        }

        .wallet {
            background-color: #7b67db;
            background-image: linear-gradient(120deg, #7b67db 0%, #ab8afb 50%, #FFFFFF 100%);
            width: 90%;
            border-radius: 5px;
            -webkit-box-shadow: 0px 0px 9px 1px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0px 0px 9px 1px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 0px 9px 1px rgba(0, 0, 0, 0.1);
            height: 167px;
            widows: 90%;
            /* margin: 0 auto; */
        }

        .wallet-body {
            background-color: #fff;
            border-radius: 0 10px 10px 0;
        }

        .addscrollbar {

            overflow-x: scroll;
            -webkit-overflow-scrolling: touch;
            display: flex;
        }

        h2 {
            font-size: 40px !important;
        }

        h3 {
            font-size: 18px !important;
        }

        .donasi-bottom {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: white;
            color: white;
            text-align: center;
        }

        .home-bottom {
            position: fixed;
            left: 0;
            right: 20px;
            bottom: 0px;
            width: 100%;
            background-color: white;
            color: white;
            text-align: center;
        }

        .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .brsmall {
            display: block;
            margin-bottom: -.4em;
        }

        .round {
            height: 50px;
            line-height: 50px;
            width: 50px;
            font-size: 1.4em;
            font-weight: bold;
            border-radius: 50%;
            background-color: rgb(231, 56, 56);
            color: white;
            text-align: center;
            cursor: pointer;
            margin-left: 10px;
            margin-top: 10px;
            border-radius: 50px;
            background-image: linear-gradient(rgb(255, 43, 43), rgb(141, 34, 34));
            box-shadow: 4px 0px 2px #888888;
        }

        .tambah {
            height: 50px;
            line-height: 50px;
            width: 50px;
            font-size: 1.4em;
            font-weight: bold;
            border-radius: 50%;
            background-color: rgb(45, 189, 52);
            color: white;
            text-align: center;
            cursor: pointer;
            margin-left: 10px;
            margin-top: 10px;
            border-radius: 50px;
            background-image: linear-gradient(rgb(65, 255, 75), rgb(55, 143, 58));
            box-shadow: 4px 0px 2px #888888;
        }

        .kanan {
            position: absolute;
            top: 10px;
            right: 0;
            color: black;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
        }

        .kiri {
            position: absolute;
            top: 10px;
            left: 60px;
            color: black;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
        }

        .myRightCtn {
            position: relative;
            background-image: linear-gradient(45deg, #f046ff, #9b00e8);
            border-radius: 25px;
            height: 100%;
            padding: 25px;
            color: rgb(192, 192, 192);
            font-size: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .myLeftCtn {
            position: relative;
            background: #fff;
            border-radius: 25%;
            height: 100%;
            padding: 5px;
            padding-left: 40px;
            padding-right: 40px;
        }

        .myLeftCtn header {
            color: blueviolet;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .row {
            height: 100%;
        }

        .myCard {
            position: relative;
            background: #fff;
            height: 100%;
            border-radius: 25px;
            -webkit-box-shadow: 0px 10px 40px -10px rgba(0, 0, 0, 0.7);
            -moz-box-shadow: 0px 10px 40px -10px rgba(0, 0, 0, 0.7);
            box-shadow: 0px 10px 40px -10px rgba(0, 0, 0, 0.7);
        }

        .myRightCtn header {
            color: #fff;
            font-size: 44px;
        }

        .box {
            position: relative;
            margin: 20px;
            margin-bottom: 100px;
        }

        .myLeftCtn .myInput {
            width: 100%;
            border-radius: 25px;
            padding: 10px;
            padding-left: 50px;
            border: none;
            -webkit-box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
            -moz-box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
            box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
        }

        .myLeftCtn .myInput:focus {
            outline: none;
        }

        .myForm {
            position: relative;
            margin-top: 50px;
        }

        .myLeftCtn .butt {
            background: linear-gradient(45deg, #fdb736, #E04237);
            color: #fff;
            width: 230px;
            border: none;
            border-radius: 25px;
            padding: 10px;
            -webkit-box-shadow: 0px 10px 41px -11px rgba(0, 0, 0, 0.7);
            -moz-box-shadow: 0px 10px 41px -11px rgba(0, 0, 0, 0.7);
            box-shadow: 0px 10px 41px -11px rgba(0, 0, 0, 0.7);
        }

        .myLeftCtn .butt:hover {
            background: linear-gradient(45deg, #E04237, #E04237);
        }

        .myLeftCtn .butt:focus {
            outline: none;
        }

        .myLeftCtn .fas {
            position: absolute;
            color: #E04237;
            left: 5%;
            margin-top: 5%;
        }

        .butt_out {
            background: transparent;
            color: #fff;
            width: 120px;
            border: 2px solid#fff;
            border-radius: 25px;
            padding: 10px;
            -webkit-box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
            -moz-box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
            box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
        }

        .butt_out:hover {
            border: 2px solid#eecbff;
        }

        .butt_out:focus {
            outline: none;
        }

        .containerlogin {
            position: absolute;
            max-width: 800px;
            height: 500px;
            margin: auto;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .tombol .butt {
            background: linear-gradient(45deg, #fdb736, #E04237);
            color: #fff;
            width: 100%;
            border: none;
            border-radius: 25px;
            padding: 10px;
            -webkit-box-shadow: 0px 10px 41px -11px rgba(0, 0, 0, 0.7);
            -moz-box-shadow: 0px 10px 41px -11px rgba(0, 0, 0, 0.7);
            box-shadow: 0px 10px 41px -11px rgba(0, 0, 0, 0.7);
        }

        .tombol .butt:hover {
            background: linear-gradient(45deg, #E04237, #E04237);
        }

        .tombol .butt:focus {
            outline: none;
        }

        .bawahkanan {
            position: fixed;
            right: 10%;
            bottom: 100px;
        }
        .login-with-google-btn {
            transition: background-color .3s, box-shadow .3s;
                
            padding: 12px 16px 12px 42px;
            border: none;
            border-radius: 3px;
            box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 1px 1px rgba(0, 0, 0, .25);
            
            color: #757575;
            font-size: 14px;
            font-weight: 500;
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
            
            background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNMTcuNiA5LjJsLS4xLTEuOEg5djMuNGg0LjhDMTMuNiAxMiAxMyAxMyAxMiAxMy42djIuMmgzYTguOCA4LjggMCAwIDAgMi42LTYuNnoiIGZpbGw9IiM0Mjg1RjQiIGZpbGwtcnVsZT0ibm9uemVybyIvPjxwYXRoIGQ9Ik05IDE4YzIuNCAwIDQuNS0uOCA2LTIuMmwtMy0yLjJhNS40IDUuNCAwIDAgMS04LTIuOUgxVjEzYTkgOSAwIDAgMCA4IDV6IiBmaWxsPSIjMzRBODUzIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNNCAxMC43YTUuNCA1LjQgMCAwIDEgMC0zLjRWNUgxYTkgOSAwIDAgMCAwIDhsMy0yLjN6IiBmaWxsPSIjRkJCQzA1IiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNOSAzLjZjMS4zIDAgMi41LjQgMy40IDEuM0wxNSAyLjNBOSA5IDAgMCAwIDEgNWwzIDIuNGE1LjQgNS40IDAgMCAxIDUtMy43eiIgZmlsbD0iI0VBNDMzNSIgZmlsbC1ydWxlPSJub256ZXJvIi8+PHBhdGggZD0iTTAgMGgxOHYxOEgweiIvPjwvZz48L3N2Zz4=);
            background-color: white;
            background-repeat: no-repeat;
            background-position: 12px 11px;
            
            &:hover {
                box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 2px 4px rgba(0, 0, 0, .25);
            }
            
            &:active {
                background-color: #eeeeee;
            }
            
            &:focus {
                outline: none;
                box-shadow: 
                0 -1px 0 rgba(0, 0, 0, .04),
                0 2px 4px rgba(0, 0, 0, .25),
                0 0 0 3px #c8dafc;
            }
            
            &:disabled {
                filter: grayscale(100%);
                background-color: #ebebeb;
                box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 1px 1px rgba(0, 0, 0, .25);
                cursor: not-allowed;
            }
            }

    </style>
</head>


<!-- page wrapper -->
<div class="d-block d-md-none" style="margin-top: 40px;"></div>
<body >
    <div class="boxed_wrapper">
        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left">
                        {{-- <a href="{{ route('home') }}"> --}}
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('trusthand/assets/images/sobo.png')}}" alt="">
                            </a>
                    </figure>
                    <div class="close-search pull-right"><span class="far fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        {{-- <form method="post" action="{{ route('home') }}"> --}}
                            <form method="post" action="{{ route('home') }}">
                                <div class="form-group">
                                    <fieldset>
                                        <input type="search" class="form-control" name="search-input" value=""
                                            placeholder="Type your keyword and hit" required>
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </fieldset>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- donate popup -->
        <livewire:donate-popup />
        <livewire:registrasi />
        <livewire:donate-form />


        <!-- sidebar cart item -->
        <div class="xs-sidebar-group info-group info-sidebar">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="index-2.html" class="close-side-widget"><i class="icon-close"></i></a>
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('trusthand/assets/images/sobo.png')}}" alt="" />
                                    </a>
                                </div>
                                <div class="content-box">
                                    <div class="mb-5">
                                        Selamat Datang, <h4 style="color:#E04237;">{{ Auth::user()->name??'' }}</h4>
                                    </div>
                                    <div class="mb-3">
                                        <a href="{{ route('donasiku') }}" style="color: black;">
                                            <i class="fa-solid fa-hand-holding-dollar fa-beat" style="--fa-animation-duration: 1.5s;"></i>
                                            <span>
                                                &nbsp; Donasiku 
                                            </span>
                                        </a>
                                    </div>
                                    <div class="mb-3">
                                        <a href="{{ route('postingku') }}" style="color: black;">
                                            <i class="fa-solid fa-comment-dots fa-beat" style="--fa-animation-duration: 1.6s;"></i>
                                            <span>
                                                &nbsp; Postingan
                                            </span>
                                        </a>
                                    </div>
                                    <div class="mb-3">
                                        <a href="{{ route('ganti-password') }}" style="color: black;">
                                            <i class="fa-solid fa-key fa-beat" style="--fa-animation-duration: 1.7s;"></i>
                                            <span>
                                                &nbsp; Ganti Password
                                            </span>
                                        </a>
                                    </div>
                                    <div class="mb-3">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: black;">
                                            <i class="fa-solid fa-right-from-bracket fa-beat" style="--fa-animation-duration: 1.8s;"></i>
                                                <span>
                                                    &nbsp; Logout
                                                </span>
                                        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar widget item end -->


        <!-- main header -->
        <header class="main-header" >
            <!-- header-lower -->
            @if(Auth::check())
            {{-- START MOBILE --}}
            <div class="d-block d-md-none">
                <div class="header-lower">
                    {{-- JIKA BUKAN HOME MENAMPILKAN TOMBOL BACK --}}
                    @if(Request::segment(1) != '' && Request::segment(1) != 'akun-profile' && Request::segment(1) !=
                    'detail-berita' && Request::segment(1) !='detail-aksi')
                    <a href="{{ url()->previous() }}">
                        <div class="round"><i class="fa fa-arrow-left" aria-hidden="true" style="height:10px !important;"></i></div>
                    </a>
                    @else
                    @endif
                </div>
            </div>
            {{-- END MOBILE --}}
            {{-- START DEKSTOP --}}
            <div class="d-none d-md-block">
                <div class="header-lower">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('trusthand/assets/images/putih.png')}}" alt="" title="">
                                </a>
                            </figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                            </nav>
                            <ul class="nav-right">
                                <li class="btn-box">
                                    <livewire:button.donasi />
                                </li>
                                <li class="nav-btn nav-toggler navSidebar-button clearfix">
                                    <i class="icon-3"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END DESKTOP --}}
            @else
            {{-- START MOBILE --}}
            {{-- JIKA BELUM LOGIN TAMPIL LOGO SOBO AKSI BERWARNA --}}
            <div class="d-block d-md-none">
                <div class="header-lower">
                    @if(Request::segment(1) != '' )
                    <a href="{{ url()->previous() }}">
                        <div class="round"><i class="fa fa-arrow-left" aria-hidden="true"
                                style="height:10px !important;"></i></div>
                    </a>
                    @else
                    @endif
                    <a href="{{ route('home') }}">
                        <center><img src="{{ asset('trusthand/assets/images/sobo.png')}}" width="70%" class="mt-4">
                        </center>
                    </a>
                </div>
            </div>
            {{-- END MOBILE --}}
            {{-- START DEKSTOP --}}
            <div class="d-none d-md-block">
                <div class="header-lower">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('trusthand/assets/images/putih.png')}}" alt="" title="">
                                </a>
                            </figure>
                        </div>
                        <livewire:button.donasi />
                    </div>
                </div>
            </div>
            {{-- END DESKTOP --}}
            @endif

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('trusthand/assets/images/sobo.png')}}" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                            </nav>
                            <ul class="nav-right">
                                <li class="btn-box">
                                    <livewire:button.donasi />
                                </li>
                                @if(Auth::check())
                                <li class="nav-btn nav-toggler navSidebar-button clearfix">
                                    <i class="icon-3"></i>
                                </li>
                                @endif
                            </ul>
                        </div>
                        {{-- <div class="d-none d-md-block">
                            <livewire:button.donasi />
                        </div> --}}
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('trusthand/assets/images/putih.png')}}" alt="" title="">
                    </a>
                </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="{{ route('home') }}"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="{{ route('home') }}"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="{{ route('home') }}"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="{{ route('home') }}"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="{{ route('home') }}"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        {{ $slot }}

        @yield('content')

        <!-- main-footer -->
        {{-- <footer class="main-footer d-none d-sm-block d-sm-none d-md-block">
            <div class="auto-container">
                <div class="footer-top">
                    <figure class="footer-logo"><a href="{{ route('home') }}">
                            <img src="{{ asset('trusthand/assets/images/sobo.png')}}" alt=""></a>
                    </figure>
                    <ul class="social-links">
                        <li><a href="{{ route('home') }}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ route('home') }}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ route('home') }}"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="footer-bottom left mt-auto">
                    <div class="copyright">
                        <p>Copyright 2022 All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </footer> --}}
        <!-- main-footer end -->



        <!--Scroll to top-->
        <div class="d-none d-md-block">
            <div class="scroll-to-top">
                <div>
                    <div class="scroll-top-inner">
                        <div class="scroll-bar">
                            <div class="bar-inner"></div>
                        </div>
                        <div class="scroll-bar-text">Go To Top</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll to top end -->

    </div>




    <!-- jequery plugins -->
    <script src="{{ asset('trusthand/assets/js/jquery.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/owl.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/wow.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/validation.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/appear.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/scrollbar.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/isotope.js')}}"></script>
    <!-- <script src="{{ asset('trusthand/assets/js/jquery.nice-select.min.js')}}"></script> -->
    <script src="{{ asset('trusthand/assets/js/parallax-scroll.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/jquery-ui.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/nav-tool.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/bxslider.js')}}"></script>

    <!-- main-js -->
    <script src="{{ asset('trusthand/assets/js/script.js')}}"></script>

    @livewireScripts
    @stack('js')
    <script>
        Livewire.on('registrasi', postId => {
            alert('A post was added with the id of: ' + postId);
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script type="text/javascript">
        function sweetAlert() {
            Swal.fire(
                'Berhasil!',
                'Menambahkan aksi.',
                'success'
            )
        }

        @if (session('store'))
            sweetAlert();
        @endif
    </script>
    <script type="text/javascript">
        function sweetAlert2() {
            Swal.fire(
                'Berhasil!',
                'Mengedit aksi.',
                'success'
            )
        }

        @if (session('edit'))
            sweetAlert2();
        @endif
    </script>


</body><!-- End of .page_wrapper -->

</html>