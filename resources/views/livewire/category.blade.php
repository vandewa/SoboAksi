<div>
    <section class="feature-section p_relative sec-pad centred" style="padding-bottom:0px !important;">
        {{-- START MOBILE --}}
        <div class="d-block d-md-none">
            <div class="sec-title centred mb_50">
                <span class="sub-title">Kategori</span>
                {{-- <h2 style="font-size: 25px !important; ">Aksi Kemanusiaan</h2> --}}
            </div>
            <div class="container">
                <div class="row">
                    @foreach($kategori as $data)
                    <div class="col-4">
                        <a href="{{ route('aksi', ['kategori' => $data->id]) }}" style="color:black;">
                            <div class="card border-light mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-2 mt-2">
                                    <img src="{{ asset('trusthand/assets/images/icons/'.$data->icon)}}" class="img-fluid rounded-start card-img-top" style="max-width:40%;">
                                    </div>
                                    <div class="col-md-8 mt-2 mb-2">
                                        <h5 style="font-size: 10px;"><a href="{{ route('aksi', ['kategori' => $data->id]) }}" style="color:black;">{{ $data->nama_kategori }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- END MOBILE --}}

        {{-- START DESKTOP --}}
        <div class="auto-container d-none d-sm-block d-sm-none d-md-block">
            <div class="sec-title centred mb_50">
                <span class="sub-title">Kategori</span>
                <h2>Aksi Kemanusiaan</h2>
            </div>
            <div class="row clearfix">
                @foreach($kategori as $data)
                <a href="{{ route('aksi', ['kategori' => $data->id]) }}">
                    <div class="col-lg-2 col-md-2 col-sm-3 feature-block mb-3">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box" style="padding: 30px 60px 17px 60px !important;">
                                <div class="icon-box">
                                    <img src="{{ asset('trusthand/assets/images/icons/'.$data->icon)}}">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <h3><a href="{{ route('aksi', ['kategori' => $data->id]) }}">{{ $data->nama_kategori }}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        {{-- END DESKTOP --}}
    </section>
</div>
