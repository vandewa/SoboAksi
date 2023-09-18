<div>
    <!-- about-section -->
    <section class="about-section p_relative sec-pad">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box p_relative mr_30">
                            <div class="sec-title mb_40">
                                <span class="sub-title">Apa itu Diaspora ?</span>
                            </div>
                            <div class="text mb_35">
                                <p>Yayasan Diaspora Adalah wadah perantau Wonosobo yang tersebar di luar kota, luar pulau dan luar negeri, sebagai wadah pemersatu untuk saling berinteraksi,saling asah, asih, asuh dan saling melindungi yang terlembagakan dengan tujuan untuk memperkuat persatuan dan berperan secara kolaboratif dalam membangun wonosobo.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_one">
                        <div class="image-box p_relative d_block ml_40">
                            <div class="shape">
                                <div class="shape-1" style="background-image: url({{ asset('trusthand/assets/images/shape/shape-1.png') }});"></div>
                                <div class="shape-2" style="background-image: url({{ asset('trusthand/assets/images/shape/shape-1.png') }});"></div>
                                <div class="shape-3"></div>
                            </div>
                            <figure class="image image-1"><img src="{{ asset('diaspora.png') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->

    <!-- team-style-two -->
    <section class="team-style-two sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                    <div class="sec-title mr_70">
                        <span class="sub-title">Pendiri</span>
                        <h2>Yayasan Diaspora Wonosobo</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="two-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                            <div class="team-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="team-details.html"><img src="https://akcdn.detik.net.id/community/media/visual/2017/04/18/81d0a275-358f-4a58-beb4-0c37d63a6092_43.jpg?w=250&q=" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="team-details.html">Tyovan Ari Widagdo</a></h3>
                                            <span class="designation">Ketua Umum</span>
                                            <ul class="social-links clearfix">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="team-details.html"><img src="{{ asset('farid.jpeg') }}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="team-details.html">Farid Gaban</a></h3>
                                            <span class="designation">Ketua</span>
                                            <ul class="social-links clearfix">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="team-details.html"><img src="{{ asset('irfan.jpeg') }}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="team-details.html">Irfan Bakhtiar</a></h3>
                                            <span class="designation">Pengawas</span>
                                            <ul class="social-links clearfix">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="team-details.html"><img src="{{ asset('tafrihan.jpeg') }}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="team-details.html">Tafrihan</a></h3>
                                            <span class="designation">Sekretaris Umum</span>
                                            <ul class="social-links clearfix">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-style-two end -->

    @include('livewire.page.footer-web')
</div>