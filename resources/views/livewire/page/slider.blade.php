<div>
    @if (!is_mobile())
        <section class="banner-section p_relative">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
                <div class="slide-item p_relative">
                    <div class="image-layer p_absolute" style="background-image:url({{ asset('sobo1.png') }})"></div>
                    <div class="shape-1"></div>
                    <div class="shape-2"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h2 class="p_relative d_block">Aksi Nyata Untuk Wonosobo</h2>
                            <p class="p_relative d_block">Sobo Aksi yang merupakan sebuah platform lokal Wonosobo yang
                                menjembatani antara kepedulian dan peluang dari Yayasan Diaspora terhadap berbagai
                                program
                                pembangunan daerah.</p>
                            <div class="btn-box">
                                <a class="theme-btn-one"><span>DIASPORA FOUNDATION</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item p_relative">
                    <div class="image-layer p_absolute" style="background-image:url({{ asset('sobo2.png') }})"></div>
                    <div class="shape-1"></div>
                    <div class="shape-2"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h2 class="p_relative d_block">Aksi Nyata Untuk Wonosobo</h2>
                            <p class="p_relative d_block">Sobo Aksi yang merupakan sebuah platform lokal Wonosobo yang
                                menjembatani antara kepedulian dan peluang dari Yayasan Diaspora terhadap berbagai
                                program
                                pembangunan daerah.</p>
                            <div class="btn-box">
                                <a class="theme-btn-one"><span>DIASPORA FOUNDATION</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->
    @else
    @endif
</div>
