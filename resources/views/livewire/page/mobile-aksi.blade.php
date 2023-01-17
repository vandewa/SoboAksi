{{-- START MOBILE --}}
<section class="cause-section sec-pad">
    <div class="auto-container d-block d-md-none">
        <div class="sec-title centred">
            <span class="sub-title">Aksi</span>
        </div>
        <div class="text-right col-md-12 float-end d-flex justify-content-end">
            <div class="float-end d-flex justify-content-end ml-6">
                <a class="btn btn-primary btn-sm" href="{{ route('list-aksi') }}"> Lihat Semua <i class="fas fa-angle-right fa-sm ml-1"></i>
                </a>
            </div>
        </div>
        <div class="row clearfix">
            <div class="row scroller">
                <div class="col-7 sidebar addscrollbar">
                    @foreach ($data as $aksi)
                    <div class="col-7 full-wallet float-left d-inline-block">
                        <div class="col-7 pl-0 pr-0 mt-4" style="max-width: 100%">
                            <div class="col-lg-4 col-md-6 col-sm-12 cause-block mb-3">
                                <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms" >
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image">
                                                <a href="{{ route('detail-donasi',$aksi->id) }}">
                                                <img src="{{ $aksi->sampul->url_photo?? asset('trusthand/assets/images/resource/cause-1.jpg') }}" style="height:200px; object-fit:cover;background-repeat:no-repeat;background-position: center center !important;">
                                                </a>
                                            </figure>
                                            <div class="category">
                                                <a href="{{ route('aksi', ['kategori' => $aksi->kategori]) }}" style="font-size:12px;line-height:16px;margin-right: 0px;">{{$aksi->kategorinya->nama_kategori}}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text" style="padding:12px 30px 13px 26px !important;text-align:left;border-bottom:0px !important;">
                                                <h2 style="font-size: 15px !important;"><a href="{{ route('detail-donasi',$aksi->id) }}" style=" color:black; ">{{$aksi->judul}}</a>
                                                </h2>
                                            </div>
                                            <div class="progress-box" style="padding:10px 20px 26px;">

                                                <div class="row mt-1">
                                                    <div class="col-6">
                                                        <a href="{{ route('detail-donasi',$aksi->id) }}">
                                                            <button class="btn btn-primary btn-block" style="font-size: 10px;width:100%;">
                                                                <i class="icon-16"></i> {{ $aksi->komentar_count }}
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        @if ($aksi->dukung_count != 0)
                                                        <button class="btn btn-danger btn-block" style="font-size: 10px;width:100%;" wire:click="like({{ $aksi->id }})">
                                                            <i class="fa fa-heart me-2"></i>
                                                            {{ $aksi->dukung_count }}
                                                        </button>
                                                        @else
                                                        <button class="btn btn-secondary btn-block" style="font-size: 10px;width:100%;" wire:click="like({{ $aksi->id }})">
                                                            <i class="fa fa-heart me-2"></i>
                                                            {{ $aksi->dukung_count }}
                                                        </button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{-- SUPAYA TIDAK KEPOTONG --}}
                    <div class="col-4 full-wallet float-left d-inline-block"></div>
                    {{-- END SUPAYA TIDAK KEPOTONG --}}

                </div>
            </div>
        </div>
    </div>
</section>
{{-- END MOBILE --}}