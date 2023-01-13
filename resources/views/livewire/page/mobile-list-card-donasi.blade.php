<div class="col-xs-12 col-sm-12 col-md-4">
    <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="inner-box">
            <div class="image-box">
                <figure class="image">
                    <a href="{{ route('detail-donasi',$idnya) }}">
                    <img src="{{ $sampul }}" style="height:200px; object-fit:cover;background-repeat:no-repeat;background-position: center center !important;">
                    </a>
                </figure>
                <div class="category"><a href="{{ route('detail-donasi',$idnya) }}">{{$kategorinya->nama_kategori}}</a></div>
            </div>
            <div class="lower-content">
                <div class="text" style="padding:12px 30px 13px 26px !important;text-align:left;border-bottom:0px !important;">
                    <h3><a href="{{ route('detail-donasi',$idnya) }}">{{substr($judul,0,55)}}..</a></h3>
                </div>
                <div class="progress-box" style="padding:40px 20px 26px;">
                    @if($penerimaDonasi)
                    <div class="bar">
                        <div class="bar-inner count-bar" style="width: {{ $peroleh/$target*100 }}%;"><div class="count-text">{{ $peroleh/$target*100 }}%</div></div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <h6>
                                <span style="font-size: 13px;width:100%;float: left;" >
                                    <b> Rp. {{ number_format($peroleh,0,',','.') }}</b>
                                </span>
                                <br>
                                <span style="font-size: 15px;width:100%;float: left;" >
                                 Diperoleh
                                </span>
                            </h6>
                        </div>

                        <div class="col-6">
                            <h6>
                                <span style="font-size: 13px;width:100%;float: right;">
                                    <b> Rp. {{ number_format($target,0,',','.') }} </b>
                                </span>
                                <br>
                                <span style="font-size: 15px;width:100%;float: left;" >
                                    Target
                                </span>
                            </h6>
                        </div>
                    </div>
                    @endif

                    <div class="row mt-1">
                        <div class="col-6">
                            <button class="btn btn-primary btn-block" style="font-size: 10px;width:100%;">
                                <i class="icon-16"></i> 0
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-danger btn-block" style="font-size: 10px;width:100%;" wire:click="like">  <i class="fa fa-heart"></i> {{ $jumlahLike }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
