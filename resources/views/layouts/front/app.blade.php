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
            border-radius: 25px;
            height: 100%;
            padding: 55px;
            padding-left: 50px;
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
            width: 230px;
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
            position: relative;
            color: #E04237;
            left: 36px;
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
    </style>
</head>


<!-- page wrapper -->

<body>
    <div class="boxed_wrapper">


        <!-- preloader -->
        {{-- <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="b" class="letters-loading">
                                b
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="k" class="letters-loading">
                                k
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- preloader end -->


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
                                    <h4>About Us</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labore et magna aliqua. Ut enim ad minim veniam laboris.</p>
                                </div>
                                <div class="form-inner">
                                    <h4>Get a free quote</h4>
                                    <form action="{{ route('home') }}" method="post">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message..."></textarea>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button class="theme-btn-one">Submit Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar widget item end -->


        <!-- main header -->
        <header class="main-header">
            <!-- header-lower -->
            @if(Auth::check())
            {{-- START MOBILE --}}
            <div class="d-block d-md-none">
                <div class="header-lower">
                    @if(Request::segment(1) != '' && Request::segment(1) != 'akun-profile' && Request::segment(1) !=
                    'detail-berita')
                    <a href="{{ url()->previous() }}">
                        <div class="round"><i class="fa fa-arrow-left" aria-hidden="true"
                                style="height:10px !important;"></i></div>
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
                        <livewire:button.donasi />
                    </div>
                </div>
                {{-- END DESKTOP --}}
                @else
                {{-- START MOBILE --}}
                {{-- JIKA BELUM LOGIN TAMPIL LOGO SOBO AKSI BERWARNA --}}
                <div class="d-block d-md-none">
                    <div class="header-lower">
                        {{-- JIKA BUKAN HOME MENAMPILKAN TOMBOL BACK --}}
                        @if(Request::segment(1) != '')
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
            </div>

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
                        {{-- <div class="menu-area clearfix">
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
                        </div> --}}
                        <div class="d-none d-md-block">
                            <livewire:button.donasi />
                        </div>
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
        <footer class="main-footer d-none d-sm-block d-sm-none d-md-block">
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
                {{-- <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="about-widget footer-widget">
                                <div class="widget-title">
                                    <h3>About</h3>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elitsollicit udin netus quis
                                        ornare. Massa pharetra in nec sed nunc.</p>
                                    <p>nisl viverra massa imperdiet. Dui mattis quis congue fames.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget ml_50">
                                <div class="widget-title">
                                    <h3>Quick Link</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{ route('home') }}">About Us</a></li>
                                        <li><a href="{{ route('home') }}">Services</a></li>
                                        <li><a href="{{ route('home') }}">Case</a></li>
                                        <li><a href="{{ route('home') }}">Pricing</a></li>
                                        <li><a href="{{ route('home') }}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget ml_30">
                                <div class="widget-title">
                                    <h3>Usefull Links</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{ route('home') }}">Privacy Policy</a></li>
                                        <li><a href="{{ route('home') }}">Terms & Condition</a></li>
                                        <li><a href="{{ route('home') }}">Support</a></li>
                                        <li><a href="{{ route('home') }}">Disclaimer</a></li>
                                        <li><a href="{{ route('home') }}">Faq</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="contact-widget footer-widget ml_30">
                                <div class="widget-title">
                                    <h3>Contact</h3>
                                </div>
                                <div class="widget-content">
                                    <p>Tincidunt neque pretium lectus donec risus.</p>
                                    <ul class="info-list clearfix">
                                        <li><i class="icon-17"></i>New Hyde Park, NY 11040</li>
                                        <li><i class="icon-18"></i><a
                                                href="mailto:example@info.com">example@info.com</a></li>
                                        <li><i class="icon-19"></i><a href="tel:3336660000">333 666 0000</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="footer-bottom left mt-auto">
                    <div class="copyright">
                        <p>Copyright 2022 All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
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

</body><!-- End of .page_wrapper -->

</html>