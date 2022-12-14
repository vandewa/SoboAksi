{{-- START MOBILE --}}
    <div class="col-7 full-wallet float-left d-inline-block">
        <div class="col-7 pl-0 pr-0 mt-4" style="max-width: 100%">
            <div class="col-lg-4 col-md-6 col-sm-12 cause-block mb-3">
                <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms" >
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="{{ route('detail-donasi',$idnya) }}">
                                <img src="{{ $sampul }}" style="width:410px;height:200px;background-size: cover;
                                background-position: center center;">
                                </a>
                            </figure>
                            <div class="category">
                                <a href="{{ route('detail-donasi',$idnya) }}" style="font-size:12px;line-height:16px;margin-right: 0px;">{{$kategorinya->nama_kategori}}
                                </a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="text" style="padding:12px 30px 13px 26px !important;text-align:center;">
                                <h2 style="font-size: 15px !important;"><a href="{{ route('detail-donasi',$idnya) }}" style=" color:black; ">{{$judul}}</a>
                                </h2>
                            </div>
                            <div class="progress-box">
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
                                        <button class="btn btn-primary btn-block" style="font-size: 10px;width:100%;">0 
                                            <i class="icon-16"></i>
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-danger btn-block" style="font-size: 10px;width:100%;" wire:click="like"> {{ $jumlahLike }} <i class="fa fa-heart"></i>
                                        </button>
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

