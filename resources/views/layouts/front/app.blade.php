<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('tittle')</title>

<!-- Fav Icon -->
<link rel="icon" href="{{ asset('trusthand/assets/images/favicon.ico')}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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


@vite([])
@livewireStyles
@stack('css')
</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
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
        </div>
        <!-- preloader end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left">
                        <a href="trusthand/index.html">
                            <img src="{{ asset('trusthand/assets/images/sobo.png')}}" alt="">
                        </a>
                    </figure>
                    <div class="close-search pull-right"><span class="far fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="trusthand/index.html">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- donate popup -->
        <livewire:donate-popup/>
        <livewire:registrasi/>


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
                                <a href="trusthand/index.html">
                                    <img src="{{ asset('trusthand/assets/images/sobo.png')}}" alt="" />
                                </a>
                            </div>
                            <div class="content-box">
                                <h4>About Us</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam laboris.</p>
                            </div>
                            <div class="form-inner">
                                <h4>Get a free quote</h4>
                                <form action="trusthand/index.html" method="post">
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
            <div class="header-lower">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo">
                            <a href="trusthand/index.html">
                                <img src="{{ asset('trusthand/assets/images/putih.png')}}" alt="" title="">
                            </a>
                        </figure>
                    </div>
                    <div class="menu-area clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="trusthand/index.html">Home</a>
                                        <ul>
                                            <li><a href="trusthand/index.html">Child Education</a></li>
                                            <li><a href="index-2.html">Wildlife</a></li>
                                            <li><a href="index-3.html">Homeless People</a></li>
                                            <li><a href="index-onepage.html">OnePage Home</a></li>
                                            <li><a href="index-rtl.html">RTL Home</a></li>
                                            <li class="dropdown"><a href="trusthand/index.html">Header Style</a>
                                                <ul>
                                                    <li><a href="trusthand/index.html">Header Style 01</a></li>
                                                    <li><a href="index-2.html">Header Style 02</a></li>
                                                    <li><a href="index-3.html">Header Style 03</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li class="dropdown"><a href="trusthand/index.html">Pages</a>
                                        <ul>
                                            <li class="dropdown"><a href="trusthand/index.html">Volunteer</a>
                                                <ul>
                                                    <li><a href="team.html">Our Volunteer</a></li>
                                                    <li><a href="team-details.html">Volunteer Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="trusthand/index.html">Events</a>
                                                <ul>
                                                    <li><a href="events.html">Our Events</a></li>
                                                    <li><a href="events-details.html">Events Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="service.html">Services</a></li>
                                            <li><a href="faq.html">Faq’s</a></li>
                                            <li><a href="testimonial.html">Testimonials</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="error.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="trusthand/index.html">Causes</a>
                                        <ul>
                                            <li><a href="causes.html">Causes 1</a></li>
                                            <li><a href="causes-2.html">Causes 2</a></li>
                                            <li><a href="causes-details.html">Causes Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="trusthand/index.html">Shop</a>
                                        <ul>
                                            <li><a href="shop.html">Our Shop</a></li>
                                            <li><a href="shop-details.html">Shop Details</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="trusthand/index.html">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog Grid</a></li>
                                            <li><a href="blog-2.html">Blog Standard</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <ul class="nav-right">
                            <li class="search-box-outer search-toggler">
                                <i class="icon-1"></i>
                            </li>
                            <li class="btn-box">
                               <livewire:button.donasi/>
                            </li>
                            <li class="nav-btn nav-toggler navSidebar-button clearfix">
                                <i class="icon-3"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo">
                                <a href="trusthand/index.html">
                                    <img src="{{ asset('trusthand/assets/images/sobo.png')}}" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                            <ul class="nav-right">
                                <li class="search-box-outer search-toggler">
                                    <i class="icon-1"></i>
                                </li>
                                <li class="btn-box">
                                    <livewire:button.donasi/>
                                </li>
                                <li class="nav-btn nav-toggler navSidebar-button clearfix">
                                    <i class="icon-3"></i>
                                </li>
                            </ul>
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
                    <a href="trusthand/index.html">
                        <img src="{{ asset('trusthand/assets/images/putih.png')}}" alt="" title="">
                    </a>
                </div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
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
                        <li><a href="trusthand/index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="trusthand/index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="trusthand/index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="trusthand/index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="trusthand/index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        @yield('content')


        <!-- main-footer -->
        <footer class="main-footer d-none d-sm-block d-sm-none d-md-block" >
            <div class="auto-container">
                <div class="footer-top">
                    <figure class="footer-logo"><a href="trusthand/index.html">
                        <img src="{{ asset('trusthand/assets/images/sobo.png')}}" alt=""></a>
                    </figure>
                    <ul class="social-links">
                        <li><a href="trusthand/index.html"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="trusthand/index.html"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="trusthand/index.html"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="about-widget footer-widget">
                                <div class="widget-title">
                                    <h3>About</h3>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elitsollicit udin netus quis ornare. Massa pharetra in nec sed nunc.</p>
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
                                        <li><a href="trusthand/index.html">About Us</a></li>
                                        <li><a href="trusthand/index.html">Services</a></li>
                                        <li><a href="trusthand/index.html">Case</a></li>
                                        <li><a href="trusthand/index.html">Pricing</a></li>
                                        <li><a href="trusthand/index.html">Contact Us</a></li>
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
                                        <li><a href="trusthand/index.html">Privacy Policy</a></li>
                                        <li><a href="trusthand/index.html">Terms & Condition</a></li>
                                        <li><a href="trusthand/index.html">Support</a></li>
                                        <li><a href="trusthand/index.html">Disclaimer</a></li>
                                        <li><a href="trusthand/index.html">Faq</a></li>
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
                                        <li><i class="icon-18"></i><a href="mailto:example@info.com">example@info.com</a></li>
                                        <li><i class="icon-19"></i><a href="tel:3336660000">333 666 0000</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom centred">
                    <div class="copyright">
                        <p>Copyright 2022 by <a href="trusthand/index.html">trusthand</a> All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->



        <!--Scroll to top-->
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
    <script src="{{ asset('trusthand/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/parallax-scroll.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/jquery-ui.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/nav-tool.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{ asset('trusthand/assets/js/bxslider.js')}}"></script>

    <!-- main-js -->
    <script src="{{ asset('trusthand/assets/js/script.js')}}"></script>

    @stack('js')
    @livewireScripts

    <script>
        Livewire.on('registrasi', postId => {
            alert('A post was added with the id of: ' + postId);
        })
    </script>
</body><!-- End of .page_wrapper -->
</html>
