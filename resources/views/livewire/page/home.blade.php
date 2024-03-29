<div>

    {{-- LOADING SCREEN SOBO AKSI --}}
    {{-- <livewire:preloader/> --}}

    {{-- START MOBILE SELAMAT DATANG --}}
    <livewire:page.mobile-selamat-datang />
    {{-- END MOBILE --}}

    <!-- KATEGORI -->
    {{-- <livewire:category/> --}}
    <!-- END KATEGORI -->

    @include('livewire.page.slider')

    <!-- GALANG DANA -->
    @if (count($aksi) != 0)
        <section class="cause-section sec-pad">
            <div class="shape">
                <div class="shape-1"
                    style="background-image: url({{ asset('trusthand/assets/images/shape/shape-3.png') }});"></div>
                <div class="shape-2"
                    style="background-image: url({{ asset('trusthand/assets/images/shape/shape-4.png') }});"></div>
            </div>
            {{-- START DESKTOP --}}
            <div class="auto-container d-none d-md-block">
                <div class="sec-title centred mb_50">
                    <span class="sub-title">Aksi</span>
                    <h2>Mau berbuat baik apa hari ini?</h2>
                </div>
                <div class="row clearfix">
                    @foreach ($aksi as $ak)
                        <livewire:global.card-donasi :data="$ak" :wire:key="'card-componen'.$ak->id" />
                    @endforeach
                    <div class="text-right col-md-12 d-flex justify-content-end mt-5">
                        <div class="d-flex justify-content-end ml-6">
                            <a class="btn btn-primary btn-md" href="{{ route('aksi') }}">Lihat Selengkapnya <i
                                    class="fas fa-angle-right fa-sm ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END DESKTOP --}}

            {{-- START MOBILE --}}
            <div class="auto-container d-block d-md-none">
                <div class="sec-title centred">
                    <span class="sub-title">Donasi</span>
                </div>
                <div class="text-right col-md-12 float-end d-flex justify-content-end">
                    <div class="float-end d-flex justify-content-end ml-6">
                        <a class="btn btn-primary btn-sm" href="{{ route('aksi') }}"> Lihat Semua <i
                                class="fas fa-angle-right fa-sm ml-1"></i>
                        </a>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="row scroller">
                        <div class="col-7 sidebar addscrollbar">
                            @foreach ($aksi as $ak)
                                <livewire:page.mobile-galang-dana :data="$ak"
                                    :wire:key="'card-componen'.$ak->id" />
                            @endforeach

                            {{-- SUPAYA TIDAK KEPOTONG --}}
                            <div class="col-4 full-wallet float-left d-inline-block"></div>
                            {{-- END SUPAYA TIDAK KEPOTONG --}}

                        </div>
                    </div>
                </div>
            </div>
            {{-- END MOBILE --}}
        </section>
    @endif
    <!-- END GALANG DANA  -->


    <!-- START AKSI MOBILE -->
    <livewire:page.mobile-aksi />
    <!-- END AKSI MOBILE -->

    <!-- START AKSI DESKTOP -->
    <livewire:web-aksi />
    <!-- END AKSI DESKTOP -->

    <!-- ARTIKEL -->
    <livewire:article />
    <!-- END ARTIKEL -->

    <!-- FOOTER -->
    {{-- START MOBILE --}}
    <div class="d-block d-md-none">
        <livewire:page.footer />
    </div>
    {{-- END MOBILE --}}
    <!-- START DESKTOP -->
    @include('livewire.page.footer-web')
    <!-- END DESKTOP -->
    <!-- END FOOTER -->

</div>
