<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
    <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="inner-box">
            <div class="image-box">
                <figure class="image">
                    <a href="{{ route('detail-donasi',$idnya) }}">
                    <img src="{{ $sampul }}" style="height:300px; object-fit:cover;background-repeat:no-repeat;background-position: center center !important;">
                    </a>
                </figure>
                <div class="category"><a href="{{ route('web-list-aksi', ['kategori' => $kategorinya->id]) }}">{{$kategorinya->nama_kategori}}</a></div>
            </div>
            <div class="lower-content">
                <div class="text" style="height:100px;">
                    <h2 style="font-size: 15px !important;">
                        <a href="{{ route('detail-donasi',$idnya) }}" style=" color:black; ">
                        @if(strlen($judul) > 45)
                            {{substr($judul,0,45)}}..
                        @else
                            {{substr($judul,0,45)}}
                        @endif
                        </a>
                    </h2>
                </div>

                {{-- <div class="text" style="padding:12px 30px 13px 26px !important;text-align:left;border-bottom:0px !important;">
                    <h3><a href="{{ route('detail-donasi',$idnya) }}">{{substr($judul,0,55)}}..</a></h3>
                </div> --}}
                @if($penerimaDonasi)
                <div class="progress-box" style="padding:40px 20px 26px;">
                @else
                <div class="progress-box" style="padding:0px 20px 26px;">  
                @endif
                    @if($penerimaDonasi)
                    <div class="bar">
                        <div class="bar-inner count-bar" style="width: {{ $peroleh/$target*100 }}%;"><div class="count-text">{{ $peroleh/$target*100 }}%</div></div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <h6>
                                <span style="font-size: 12px;width:100%;float: left;" >
                                    <b> Rp. {{ number_format($peroleh,0,',','.') }}</b>
                                </span>
                                <br>
                                <span style="font-size: 13px;width:100%;float: left;" >
                                    Diperoleh
                                </span>
                            </h6>
                        </div>

                        <div class="col-6">
                            <h6>
                                <span style="font-size: 12px;width:100%;float: right;">
                                    <b> Rp. {{ number_format($target,0,',','.') }} </b>
                                </span>
                                <br>
                                <span style="font-size: 13px;width:100%;float: left;" >
                                    Target
                                </span>
                            </h6>
                        </div>
                    </div>
                    @endif

                    @if (Auth::check())
                        @if ($jumlahLike == 1)
                            @if ($saya)
                                <span style="font-size: 11px;" class="ml-2"><b>Kamu</b> mendukung aksi ini</span>  
                            @else
                                <span style="font-size: 11px;" class="ml-2"><b>{{ $jumlahLike }} orang</b> mendukung aksi ini</span>   
                            @endif
                        @else
                            <span style="font-size: 11px;" class="ml-2"><b>{{ $jumlahLike }} orang</b> mendukung aksi ini</span> 
                        @endif                       
                    @else
                        <span style="font-size: 11px;" class="ml-2"><b>{{ $jumlahLike }} orang</b> mendukung aksi ini</span>
                    @endif

                    <div class="row mt-1">
                        <div class="col-6">
                            @if (Auth::check())
                                @if ($saya)
                                <div class="ml-2">
                                    <button wire:click="like({{ $idnya }})">
                                    <img src="{{ asset('images/png/hand.png') }}" width="20px;">
                                    <span style="font-size: 12px;">Dukung</span>
                                    </button>
                                </div>
                                @else
                                <div class="ml-2">
                                    <button wire:click="like({{ $idnya }})">
                                        <span style="font-size: 12px;"><i class="far fa-hand-rock"></i>&nbsp;&nbsp;Dukung</span>
                                    </button>
                                </div>
                                @endif 
                            @else
                            <div class="ml-2">
                                <a wire:click="$emitTo('registrasi', 'tampilModal')">
                                    <span style="font-size: 12px;"><i class="far fa-hand-rock"></i>&nbsp;&nbsp;Dukung</span>
                                </a>
                            </div>
                            @endif
                        </div>
                        
                        <div class="col-6">
                            <div class="ml-1">
                                <a href="{{ route('detail-donasi',$idnya) }}">
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