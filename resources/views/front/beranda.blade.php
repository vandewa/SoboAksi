@extends('layouts.front.app')

@section('content')
<!-- banner-section -->
<section class="banner-section p_relative" xmlns:livewire="http://www.w3.org/1999/html">
    <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
        {{-- <div class="slide-item p_relative">
            <div class="image-layer p_absolute" style="background-image:url({{ asset('trusthand/assets/images/banner/b.jpg')}})"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="auto-container">
                <div class="content-box p_relative d_block z_5">
                    <span class="special-text special_fonts p_relative d_block">Change The World</span>
                    <h2 class="p_relative d_block">Bupati Afif Salurkan Bantuan 612 juta rupiah  </h2>
                    <p class="p_relative d_block">untuk Pembangunan dan Rehab Rumah Korban Bencana Alam</p>
                    <div class="btn-box">
                        <a href="index.html" class="theme-btn-one"><span>Discover More</span></a>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="slide-item p_relative">
            <div class="image-layer p_absolute" style="background-image:url({{ asset('trusthand/assets/images/banner/b.png')}})"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="auto-container">
                <div class="content-box p_relative d_block z_5">
                    {{-- <span class="special-text special_fonts p_relative d_block">Change The World</span> --}}
                    <h2 class="p_relative d_block">Afif Salurkan Bantuan 612 juta rupiah</h2>
                    {{-- <p class="p_relative d_block">Bupati Wonosobo Afif Nurhidayat menyerahkan bantuan sosial senilai 612.500.000 juta rupiah untuk pembangunan dan rehabilitasi rumah bagi korban bencana alam di Wonosobo</p> --}}
                    <div class="btn-box">
                        {{-- <a href="index.html" class="theme-btn-one"><span>Discover More</span></a> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item p_relative">
            <div class="image-layer p_absolute" style="background-image:url({{ asset('trusthand/assets/images/banner/a.png')}})"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="auto-container">
                <div class="content-box p_relative d_block z_5">
                    {{-- <span class="special-text special_fonts p_relative d_block">Change The World</span> --}}
                    <h2 class="p_relative d_block">Bantuan Korban Kebakaran Kampung Gintung</h2>
                    {{-- <p class="p_relative d_block">Bupati Wonosobo Afif Nurhidayat menyerahkan bantuan sosial senilai 612.500.000 juta rupiah untuk pembangunan dan rehabilitasi rumah bagi korban bencana alam di Wonosobo</p> --}}
                    <div class="btn-box">
                        {{-- <a href="index.html" class="theme-btn-one"><span>Discover More</span></a> --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="slide-item p_relative">
            <div class="image-layer p_absolute" style="background-image:url({{ asset('trusthand/assets/images/banner/banner-2.jpg')}})"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="auto-container">
                <div class="content-box p_relative d_block z_5">
                    <span class="special-text special_fonts p_relative d_block">Change The World</span>
                    <h2 class="p_relative d_block">Make The Defference Today with Charity</h2>
                    <p class="p_relative d_block">Lorem ipsum dolor sit amet, consectetur adipiscing elit Turpis ridiculus tellus.</p>
                    <div class="btn-box">
                        <a href="index.html" class="theme-btn-one"><span>Discover More</span></a>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
<!-- banner-section end -->


<!-- feature-section -->
<livewire:category/>
<!-- feature-section end -->


{{-- <!-- about-section -->
<section class="about-section bg-color-1 p_relative sec-pad">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_one">
                    <div class="content-box p_relative mr_30">
                        <div class="sec-title mb_40">
                            <span class="sub-title">About Trusthand</span>
                            <h2>Our Mission Is to Change The World</h2>
                        </div>
                        <div class="text mb_35">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quam turpis nulla magnis vestibulum tempor quam molestie. Dolor tortor pulvinar mus et Euismod rhoncus imperdiet diam.Quis nibh massa nullam nunc, quis ridiculus. Est nisl, consectetur nunc.</p>
                        </div>
                        <div class="inner mb_45">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="upper">
                                            <div class="icon-box"><i class="icon-4"></i></div>
                                            <h3>Quick Fundraising</h3>
                                        </div>
                                        <p>Amet minim mollit no deserunt ulamco sit enim.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="upper">
                                            <div class="icon-box"><i class="icon-5"></i></div>
                                            <h3>Join our Team</h3>
                                        </div>
                                        <p>Amet minim mollit no deserunt ulamco sit enim.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-box">
                            <a href="contact.html" class="theme-btn-one">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_one">
                    <div class="image-box p_relative d_block ml_40">
                        <div class="shape">
                            <div class="shape-1" style="background-image: url({{ asset('trusthand/assets/images/shape/shape-1.png')}});"></div>
                            <div class="shape-2" style="background-image: url({{ asset('trusthand/assets/images/shape/shape-1.png')}});"></div>
                            <div class="shape-3"></div>
                        </div>
                        <figure class="image image-1"><img src="{{ asset('trusthand/assets/images/resource/about-1.jpg')}}" alt=""></figure>
                        <figure class="image image-2"><img src="{{ asset('trusthand/assets/images/resource/about-2.jpg')}}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end --> --}}


{{-- <!-- funfact-section -->
<section class="funfact-section pt_80 pb_80 bg-color-2">
    <div class="pattern-layer" style="background-image: url({{ asset('trusthand/assets/images/shape/shape-2.png')}});"></div>
    <div class="auto-container">
        <div class="inner-container">
            <div class="funfact-block-one">
                <div class="inner-box">
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="29">0</span>
                    </div>
                    <h3>Years of <br />Fund Raising</h3>
                </div>
            </div>
            <div class="funfact-block-one">
                <div class="inner-box">
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="3">0</span><span>k</span>
                    </div>
                    <h3>Happy <br />Volunteers</h3>
                </div>
            </div>
            <div class="funfact-block-one">
                <div class="inner-box">
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="8">0</span><span>k</span>
                    </div>
                    <h3>Total <br />Monthly Doners</h3>
                </div>
            </div>
            <div class="funfact-block-one">
                <div class="inner-box">
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="10">0</span><span>k</span>
                    </div>
                    <h3>Total <br />Campaigns</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- funfact-section end --> --}}


<!-- cause-section -->
<section class="cause-section sec-pad">
    <div class="shape">
        <div class="shape-1" style="background-image: url({{ asset('trusthand/assets/images/shape/shape-3.png')}});"></div>
        <div class="shape-2" style="background-image: url({{ asset('trusthand/assets/images/shape/shape-4.png')}});"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title centred mb_50">
            <span class="sub-title">Penggalangan Dana</span>
            <h2>Penggalangan Dana Mendesak</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="causes-details.html"><img src="{{ asset('trusthand/assets/images/resource/cause-1.jpg')}}" alt=""></a></figure>
                            <div class="category"><a href="causes-details.html">Education</a></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">
                                <h3><a href="causes-details.html">Education <br />For Child Education</a></h3>
                                <p>Amet minim mollit no duis deserut lamo sit enim aliqua dolor do amet sint Velit officia consequt.</p>
                            </div>
                            <div class="progress-box">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="85%"><div class="count-text">85%</div></div>
                                </div>
                                <div class="donate-text">
                                    <h6><span>$5,020</span> Raised</h6>
                                    <h6><span>$8,000</span> Target</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                <div class="cause-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="causes-details.html"><img src="{{ asset('trusthand/assets/images/resource/cause-2.jpg')}}" alt=""></a></figure>
                            <div class="category"><a href="causes-details.html">Education</a></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">
                                <h3><a href="causes-details.html">Promoting <br />The Rights of Children</a></h3>
                                <p>Amet minim mollit no duis deserut lamo sit enim aliqua dolor do amet sint Velit officia consequt.</p>
                            </div>
                            <div class="progress-box">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="50%"><div class="count-text">50%</div></div>
                                </div>
                                <div class="donate-text">
                                    <h6><span>$6,020</span> Raised</h6>
                                    <h6><span>$12,000,000</span> Target</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                <div class="cause-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="causes-details.html"><img src="{{ asset('trusthand/assets/images/resource/cause-3.jpg')}}" alt=""></a></figure>
                            <div class="category"><a href="causes-details.html">Education</a></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">
                                <h3><a href="causes-details.html">Education <br/>For African Children</a></h3>
                                <p>Amet minim mollit no duis deserut lamo sit enim aliqua dolor do amet sint Velit officia consequt.</p>
                            </div>
                            <div class="progress-box">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="90%"><div class="count-text">90%</div></div>
                                </div>
                                <div class="donate-text">
                                    <h6><span>$9,080</span> Raised</h6>
                                    <h6><span>$10,000</span> Target</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cause-section end -->


<!-- featured-causes -->
<section class="featured-causes">
    <div class="auto-container">
        <div class="sec-title mb_50">
            <span class="sub-title">Berbagi</span>
            <h2>Inisiasi dan Prakarsa</h2>
        </div>
        <div class="two-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <div class="single-item">
                <div class="inner-box" style="background-image: url({{ asset('trusthand/assets/images/resource/feature-1.jpg')}});">
                    <div class="text">
                        <span>Help Children</span>
                        <h3>Join The Community <br />For Education</h3>
                        <button class="donate-box-btn theme-btn-one">Donate Now</button>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="inner-box" style="background-image: url({{ asset('trusthand/assets/images/resource/feature-2.jpg')}});">
                    <div class="text">
                        <span>Help Children</span>
                        <h3>Join The Community <br />For Education</h3>
                        <button class="donate-box-btn theme-btn-one">Donate Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- featured-causes end -->


{{-- <!-- service-section -->
<section class="service-section sec-pad bg-color-1 centred">
    <div class="auto-container">
        <div class="sec-title centred mb_50">
            <span class="sub-title">What we do</span>
            <h2>We Believe that We can Save <br />More Lifes with You</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon-bg" style="background-image: url({{ asset('trusthand/assets/images/icons/icon-bg-1.png')}});"></div>
                            <div class="icon"><i class="icon-8"></i></div>
                        </div>
                        <h3><a href="index.html">Education</a></h3>
                        <p>Amet minim mollit no deserunt ulamco sit enim aliqua dolor sint Velit officia consequt duis enim velit exertation.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon-bg" style="background-image: url({{ asset('trusthand/assets/images/icons/icon-bg-2.png')}});"></div>
                            <div class="icon"><i class="icon-9"></i></div>
                        </div>
                        <h3><a href="index.html">Safe Water</a></h3>
                        <p>Amet minim mollit no deserunt ulamco sit enim aliqua dolor sint Velit officia consequt duis enim velit exertation.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon-bg" style="background-image: url({{ asset('trusthand/assets/images/icons/icon-bg-3.png')}});"></div>
                            <div class="icon"><i class="icon-10"></i></div>
                        </div>
                        <h3><a href="index.html">Healthy Food</a></h3>
                        <p>Amet minim mollit no deserunt ulamco sit enim aliqua dolor sint Velit officia consequt duis enim velit exertation.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon-bg" style="background-image: url({{ asset('trusthand/assets/images/icons/icon-bg-4.png')}});"></div>
                            <div class="icon"><i class="icon-11"></i></div>
                        </div>
                        <h3><a href="index.html">Medical Care</a></h3>
                        <p>Amet minim mollit no deserunt ulamco sit enim aliqua dolor sint Velit officia consequt duis enim velit exertation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-section end --> --}}


{{-- <!-- project-section -->
<section class="project-section">
    <div class="outer-container">
        <div class="project-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
            <div class="project-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('trusthand/assets/images/gallery/gallery-1.jpg')}}" alt=""></figure>
                    <div class="content-box">
                        <div class="inner">
                            <div class="view-btn"><a href="{{ asset('trusthand/assets/images/gallery/gallery-1.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-12"></i></a></div>
                            <h3><a href="index.html">School In Africa</a></h3>
                            <p>Education</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('trusthand/assets/images/gallery/gallery-2.jpg')}}" alt=""></figure>
                    <div class="content-box">
                        <div class="inner">
                            <div class="view-btn"><a href="{{ asset('trusthand/assets/images/gallery/gallery-1.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-12"></i></a></div>
                            <h3><a href="index.html">School In Africa</a></h3>
                            <p>Education</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('trusthand/assets/images/gallery/gallery-3.jpg')}}" alt=""></figure>
                    <div class="content-box">
                        <div class="inner">
                            <div class="view-btn"><a href="{{ asset('trusthand/assets/images/gallery/gallery-1.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-12"></i></a></div>
                            <h3><a href="index.html">School In Africa</a></h3>
                            <p>Education</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('trusthand/assets/images/gallery/gallery-4.jpg')}}" alt=""></figure>
                    <div class="content-box">
                        <div class="inner">
                            <div class="view-btn"><a href="{{ asset('trusthand/assets/images/gallery/gallery-1.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-12"></i></a></div>
                            <h3><a href="index.html">School In Africa</a></h3>
                            <p>Education</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project-section end --> --}}


{{-- <!-- team-section -->
<section class="team-section sec-pad centred">
    <div class="auto-container">
        <div class="sec-title centred mb_50">
            <span class="sub-title">Volunteer</span>
            <h2>Meet Our Awesome <br />Volunteer</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="team-details.html"><img src="{{ asset('trusthand/assets/images/team/team-1.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="inner">
                                <h3><a href="team-details.html">Darlene Robertson</a></h3>
                                <span class="designation">Volunteer</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="team-details.html"><img src="{{ asset('trusthand/assets/images/team/team-2.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="inner">
                                <h3><a href="team-details.html">Brooklyn Simmons</a></h3>
                                <span class="designation">Volunteer</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="team-details.html"><img src="{{ asset('trusthand/assets/images/team/team-3.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="inner">
                                <h3><a href="team-details.html">Arlene McCoy</a></h3>
                                <span class="designation">Volunteer</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-section end --> --}}


{{-- <!-- testimonial-section -->
<section class="testimonial-section">
    <div class="bg-layer" style="background-image: url({{ asset('trusthand/assets/images/background/testimonial-bg.jpg')}});"></div>
    <div class="outer-container clearfix">
        <div class="testimonial-content">
            <div class="shape" style="background-image: url({{ asset('trusthand/assets/images/shape/shape-5.png')}});"></div>
            <div class="content-box">
                <div class="sec-title light mb_50">
                    <div class="sub-title">Testimonials</div>
                    <h2>What Clients Say About Trusthand</h2>
                </div>
                <div class="bxslider">
                    <div class="slider-content">
                        <div class="slider-pager">
                            <ul class="thumb-box">
                                <li>
                                    <a class="active" data-slide-index="0" href="#">
                                        <figure class="thumb thumb-1"><img src="{{ asset('trusthand/assets/images/resource/testimonial-1.jpg')}}" alt=""></figure>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <figure class="thumb thumb-2"><img src="{{ asset('trusthand/assets/images/resource/testimonial-2.jpg')}}" alt=""></figure>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#">
                                        <figure class="thumb thumb-3"><img src="{{ asset('trusthand/assets/images/resource/testimonial-3.jpg')}}" alt=""></figure>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="testimonial-inner">
                            <ul class="rating-box clearfix">
                                <li><i class="icon-13"></i></li>
                                <li><i class="icon-13"></i></li>
                                <li><i class="icon-13"></i></li>
                                <li><i class="icon-13"></i></li>
                                <li><i class="icon-14"></i></li>
                            </ul>
                            <p>“Blandit aliquet varius id malesuada nunc euismod id tempor, malesuada sollicitudin sit nisi tellus auctor vitae dignissim lacinia convallis sapien dictum.”</p>
                            <div class="author-info">
                                <h3>Arlene McCoy</h3>
                                <span class="designation">Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider-content">
                        <div class="slider-pager">
                            <ul class="thumb-box">
                                <li>
                                    <a class="active" data-slide-index="0" href="#">
                                        <figure class="thumb thumb-1"><img src="{{ asset('trusthand/assets/images/resource/testimonial-1.jpg')}}" alt=""></figure>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <figure class="thumb thumb-2"><img src="{{ asset('trusthand/assets/images/resource/testimonial-2.jpg')}}" alt=""></figure>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#">
                                        <figure class="thumb thumb-3"><img src="{{ asset('trusthand/assets/images/resource/testimonial-3.jpg')}}" alt=""></figure>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="testimonial-inner">
                            <ul class="rating-box clearfix">
                                <li><i class="icon-13"></i></li>
                                <li><i class="icon-13"></i></li>
                                <li><i class="icon-13"></i></li>
                                <li><i class="icon-13"></i></li>
                                <li><i class="icon-14"></i></li>
                            </ul>
                            <p>“Blandit aliquet varius id malesuada nunc euismod id tempor, malesuada sollicitudin sit nisi tellus auctor vitae dignissim lacinia convallis sapien dictum.”</p>
                            <div class="author-info">
                                <h3>Haris Gulati</h3>
                                <span class="designation">Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider-content">
                        <div class="slider-pager">
                            <ul class="thumb-box">
                                <li>
                                    <a class="active" data-slide-index="0" href="#">
                                        <figure class="thumb thumb-1"><img src="{{ asset('trusthand/assets/images/resource/testimonial-1.jpg')}}" alt=""></figure>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <figure class="thumb thumb-2"><img src="{{ asset('trusthand/assets/images/resource/testimonial-2.jpg')}}" alt=""></figure>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#">
                                        <figure class="thumb thumb-3"><img src="{{ asset('trusthand/assets/images/resource/testimonial-3.jpg')}}" alt=""></figure>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="testimonial-inner">
                            <ul class="rating-box clearfix">
                                <li><i class="icon-13"></i></li>
                                <li><i class="icon-13"></i></li>
                                <li><i class="icon-13"></i></li>
                                <li><i class="icon-13"></i></li>
                                <li><i class="icon-14"></i></li>
                            </ul>
                            <p>“Blandit aliquet varius id malesuada nunc euismod id tempor, malesuada sollicitudin sit nisi tellus auctor vitae dignissim lacinia convallis sapien dictum.”</p>
                            <div class="author-info">
                                <h3>Jhon Haris</h3>
                                <span class="designation">Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end --> --}}


{{-- <!-- clients-section -->
<section class="clients-section">
    <div class="auto-container">
        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
            <figure class="clients-logo"><a href="index.html"><img src="{{ asset('trusthand/assets/images/clients/clients-1.png')}}" alt=""></a></figure>
            <figure class="clients-logo"><a href="index.html"><img src="{{ asset('trusthand/assets/images/clients/clients-2.png')}}" alt=""></a></figure>
            <figure class="clients-logo"><a href="index.html"><img src="{{ asset('trusthand/assets/images/clients/clients-3.png')}}" alt=""></a></figure>
            <figure class="clients-logo"><a href="index.html"><img src="{{ asset('trusthand/assets/images/clients/clients-4.png')}}" alt=""></a></figure>
            <figure class="clients-logo"><a href="index.html"><img src="{{ asset('trusthand/assets/images/clients/clients-5.png')}}" alt=""></a></figure>
        </div>
    </div>
</section>
<!-- clients-section end --> --}}


<!-- news-section -->
<livewire:article/>
<!-- news-section end -->

@endsection
