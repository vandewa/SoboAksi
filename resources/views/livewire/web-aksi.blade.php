{{-- start web --}}
<div class="auto-container d-none d-md-block    ">
    <div class="sec-title centred mb_50">
        <span class="sub-title">Aksi</span>
        <h2>Berbagi Inisiasi dan Prakarsa</h2>
    </div>
    <div class="row clearfix mb-5">
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
                            <a href="{{ route('web-list-aksi', ['kategori' => $aksi->kategori]) }}" style="font-size:12px;line-height:16px;margin-right: 0px;">{{$aksi->kategorinya->nama_kategori}}
                            </a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="text" style="padding:30px 30px 13px 26px !important;text-align:left;border-bottom:0px !important;">
                            <h2 style="font-size: 17px !important;"><a href="{{ route('detail-donasi',$aksi->id) }}" style=" color:black; ">{{$aksi->judul}}</a>
                            </h2>
                        </div>
                        <div class="progress-box" style="padding:10px 20px 26px;">
                            @if (Auth::check())
                                @if ($aksi->dukung_count == 1)
                                    @if ($aksi->dukunganSaya)
                                        <span style="font-size: 11px;" class="ml-2"><b>Kamu</b> mendukung aksi ini</span>  
                                    @else
                                        <span style="font-size: 11px;" class="ml-2"><b>{{ $aksi->dukung_count }} orang</b> mendukung aksi ini</span>   
                                    @endif
                                @else
                                    <span style="font-size: 11px;" class="ml-2"><b>{{ $aksi->dukung_count }} orang</b> mendukung aksi ini</span> 
                                @endif                       
                            @else
                                @if ($aksi->dukunganSaya)
                                <span style="font-size: 9px;" class="ml-2">
                                    <b>Kamu</b> dan <b>{{ $aksi->dukung_count - 1 }} orang</b> mendukung aksi ini
                                </span> 
                                @else
                                    <span style="font-size: 11px;" class="ml-2"><b>{{ $aksi->dukung_count }} orang</b> mendukung aksi ini</span>   
                                @endif
                               
                            @endif

                            <div class="row mt-1">
                                <div class="col-6">
                                    @if (Auth::check())
                                        @if ($aksi->dukunganSaya)
                                        <div class="ml-1">
                                            <button wire:click="like({{ $aksi->id }})">
                                            <img src="{{ asset('images/png/hand.png') }}" width="20px;">
                                            <span style="font-size: 12px;">Dukung</span>
                                            </button>
                                        </div>
                                        @else
                                        <div class="ml-1">
                                            <button wire:click="like({{ $aksi->id }})">
                                                <span style="font-size: 12px;"><i class="far fa-hand-rock"></i>&nbsp;&nbsp;Dukung</span>
                                            </button>
                                        </div>
                                        @endif 
                                    @else
                                    <div class="ml-1">
                                        <a wire:click="$emitTo('registrasi', 'tampilModal')">
                                            <span style="font-size: 12px;"><i class="far fa-hand-rock"></i>&nbsp;&nbsp;Dukung</span>
                                        </a>
                                    </div>
                                    @endif
                                </div>
                                
                                <div class="col-6">
                                    <div class="ml-1">
                                        <a href="{{ route('detail-donasi',$aksi->id) }}">
                                            <span style="font-size: 12px;color:black;"><i class="fas fa-eye" style="color: grey;"></i>&nbsp;&nbsp;Lihat</span>
                                        </a>
                                    </div>
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
