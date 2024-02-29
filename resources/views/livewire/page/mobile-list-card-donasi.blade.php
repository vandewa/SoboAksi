<div class="container">
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="cause-block-one wow fadeInUp animated d-flex justify-content-center" data-wow-delay="00ms"
            data-wow-duration="1500ms">
            <div class="inner-box" style="width: 70%;">
                <div class="image-box">
                    <figure class="image">
                        <a href="{{ route('detail-donasi', $idnya) }}">
                            <img src="{{ route('helper.show-picture', ['path' => $sampul]) }}"
                                style="height:200px; object-fit:cover;background-repeat:no-repeat;background-position: center center !important;">
                        </a>
                    </figure>
                    <div class="category"><a
                            href="{{ route('aksi', ['kategori' => $kategori]) }}">{{ $kategorinya->nama_kategori }}</a>
                    </div>
                </div>
                <div class="lower-content">
                    <div class="text" style="height:100px;">
                        <h2 style="font-size: 15px !important;">
                            <a href="{{ route('detail-donasi', $idnya) }}" style=" color:black; ">
                                @if (strlen($judul) > 45)
                                    {{ substr($judul, 0, 45) }}..
                                @else
                                    {{ substr($judul, 0, 45) }}
                                @endif
                            </a>
                        </h2>
                    </div>
                    {{-- <div class="text" style="padding:12px 30px 13px 26px !important;text-align:left;border-bottom:0px !important;">
                        <h3><a href="{{ route('detail-donasi',$idnya) }}">{{substr($judul,0,55)}}..</a></h3>
                    </div> --}}
                    @if ($penerimaDonasi)
                        <div class="progress-box" style="padding:40px 20px 26px;">
                        @else
                            <div class="progress-box" style="padding:0px 20px 26px;">
                    @endif
                    @if ($penerimaDonasi)
                        <div class="bar">
                            <div class="bar-inner count-bar" style="width: {{ ($peroleh / $target) * 100 }}%;">
                                <div class="count-text">{{ ($peroleh / $target) * 100 }}%</div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <span style="font-size: 12px;width:100%;float: left;">
                                        <b> Rp. {{ number_format($peroleh, 0, ',', '.') }}</b>
                                    </span>
                                    <br>
                                    <span style="font-size: 13px;width:100%;float: left;">
                                        Diperoleh
                                    </span>
                                </h6>
                            </div>

                            <div class="col-6">
                                <h6>
                                    <span style="font-size: 12px;width:100%;float: right;">
                                        <b> Rp. {{ number_format($target, 0, ',', '.') }} </b>
                                    </span>
                                    <br>
                                    <span style="font-size: 13px;width:100%;float: left;">
                                        Target
                                    </span>
                                </h6>
                            </div>
                        </div>
                    @endif

                    <div class="row mt-1">
                        <div class="col-6">
                            <a href="{{ route('detail-donasi', $idnya) }}">
                                <button class="btn btn-primary btn-block" style="font-size: 10px;width:100%;">
                                    <i class="icon-16"></i> {{ $jumlahKomentar }}
                                </button>
                            </a>
                        </div>
                        <div class="col-6">
                            @if ($jumlahLike != 0)
                                <button class="btn btn-danger btn-block" style="font-size: 10px;width:100%;"
                                    wire:click="like">
                                    <i class="fa fa-heart me-2"></i>
                                    {{ $jumlahLike }}
                                </button>
                            @else
                                <button class="btn btn-secondary btn-block" style="font-size: 10px;width:100%;"
                                    wire:click="like">
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
