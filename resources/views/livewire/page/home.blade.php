<div>
<!-- feature-section -->
<livewire:category/>
<!-- feature-section end -->

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
        @foreach ($aksi as $ak)
            <livewire:global.card-donasi :data="$ak" :wire:key="'card-componen'.$ak->id"/>
        @endforeach
            <div class="text-right col-md-12 float-end mt-3 d-flex justify-content-end">
                <div class="float-end d-flex justify-content-end ml-6">
                    <a class="btn btn-primary btn-md" href="{{ route('aksi') }}">Lihat Selengkapnya <i class="fas fa-angle-right fa-sm ml-1"></i>
                    </a>
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



<!-- news-section -->
<livewire:article/>
<!-- news-section end -->

</div>
