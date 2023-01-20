{{-- start web --}}
<div class="auto-container d-none d-md-block">
    <div class="sec-title centred mb_50">
        <span class="sub-title">Aksi</span>
        <h2>Berbagi Inisiasi dan Prakarsa</h2>
    </div>
    <div class="row clearfix">
        @foreach ($data as $aksi)
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms" >
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="{{ route('detail-donasi',$aksi->id) }}">
                            <img src="{{ $aksi->sampul->url_photo?? asset('trusthand/assets/images/resource/cause-1.jpg') }}" style="height:300px; object-fit:cover;background-repeat:no-repeat;background-position: center center !important;">
                            </a>
                        </figure>
                        <div class="category">
                            <a href="{{ route('list-aksi', ['kategori' => $aksi->kategori]) }}" style="font-size:12px;line-height:16px;margin-right: 0px;">{{$aksi->kategorinya->nama_kategori}}
                            </a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="text" style="padding:30px 30px 13px 26px !important;text-align:left;border-bottom:0px !important;">
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
        @endforeach
        <div class="text-right col-md-12 d-flex justify-content-end mt-5">
            <div class="d-flex justify-content-end ml-6">
                <a class="btn btn-primary btn-md" href="{{ route('web-list-aksi') }}">Lihat Selengkapnya <i class="fas fa-angle-right fa-sm ml-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>
{{-- end web --}}
