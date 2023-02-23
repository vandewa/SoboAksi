{{-- START MOBILE --}}
    <div class="col-7 full-wallet float-left d-inline-block">
        <div class="col-7 pl-0 pr-0 mt-4" style="max-width: 100%">
            <div class="col-lg-4 col-md-6 col-sm-12 cause-block mb-3">
                <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms" >
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="{{ route('detail-donasi',$idnya) }}">
                                <img src="{{ $sampul }}" style="height:200px; object-fit:cover;background-repeat:no-repeat;background-position: center center !important;">
                                </a>
                            </figure>
                            <div class="category">
                                <a href="{{ route('aksi', ['kategori' => $kategori]) }}" style="font-size:12px;line-height:16px;margin-right: 0px;">{{$kategorinya->nama_kategori}}
                                </a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="text" style="padding:12px 30px 13px 26px !important;text-align:left;border-bottom:0px !important;">
                                <h2 style="font-size: 15px !important;"><a href="{{ route('detail-donasi',$idnya) }}" style=" color:black; ">{{$judul}}</a>
                                </h2>
                            </div>
                            <div class="text" style="padding:12px 30px 13px 26px !important;text-align:left;border-bottom:0px !important;">
                                <h2 style="font-size: 12px !important;"><a href="{{ route('detail-donasi',$idnya) }}" style=" color:black; ">{{$keterangan}}</a>
                                </h2>
                            </div>
                            <div class="progress-box" style="padding:40px 20px 26px;">
                                @if($penerimaDonasi)
                                <div class="bar">
                                    <div class="bar-inner count-bar" style="width: {{ $peroleh/$target*100 }}%;"><div class="count-text">{{ $peroleh/$target*100 }}%</div></div>
                                </div>
    
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <h6>
                                            <span style="font-size: 9px;width:100%;float: left;" >
                                                <b> Rp. {{ number_format($peroleh,0,',','.') }}</b>
                                            </span>
                                            <br>
                                            <span style="font-size: 11px;width:100%;float: left;" >
                                             Diperoleh
                                            </span>
                                        </h6>
                                    </div>
                                   
                                    <div class="col-6">
                                        <h6>
                                            <span style="font-size: 9px;width:100%;float: right;">
                                                <b> Rp. {{ number_format($target,0,',','.') }} </b>
                                            </span>
                                            <br>
                                            <span style="font-size: 11px;width:100%;float: left;" >
                                                Target
                                            </span> 
                                        </h6>
                                    </div>
                                </div>
                                @endif

                                <div class="row mt-1">
                                    <div class="col-6">
                                        @if (Auth::check())
                                        <a href="{{ route('detail-donasi',$idnya) }}">
                                            <button class="btn btn-primary btn-block" style="font-size: 10px;width:100%;">
                                                <i class="icon-16"></i> {{ $jumlahKomentar }}
                                            </button>
                                        </a>
                                        @else
                                        <a wire:click="$emitTo('registrasi', 'tampilModal')">
                                            <button class="btn btn-primary btn-block" style="font-size: 10px;width:100%;">
                                                <i class="icon-16"></i> {{ $jumlahKomentar }}
                                            </button>
                                        </a>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        @if (Auth::check())
                                            @if ($saya)
                                            <button class="btn btn-danger btn-block" style="font-size: 10px;width:100%;" wire:click="like">
                                                <i class="fa fa-heart me-2"></i>
                                                {{ $jumlahLike }}
                                            </button>
                                            @else
                                            <button class="btn btn-secondary btn-block" style="font-size: 10px;width:100%;" wire:click="like">
                                                <i class="fa fa-heart me-2"></i>
                                                {{ $jumlahLike }}
                                            </button>
                                            @endif 
                                        @else
                                        <button class="btn btn-secondary btn-block" style="font-size: 10px;width:100%;"     wire:click="$emitTo('registrasi', 'tampilModal')">
                                            <i class="fa fa-heart me-2"></i>
                                            {{ $jumlahLike }}
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
{{-- END MOBILE --}}

