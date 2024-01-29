{{-- start web --}}
<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
    <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="inner-box">
            <div class="image-box">
                <figure class="image">
                    <a href="{{ route('detail-donasi', $idnya) }}">
                        <img src="{{ $sampul }}"
                            style="height:300px; object-fit:cover;background-repeat:no-repeat;background-position: center center !important;">
                    </a>
                </figure>
                <div class="category"><a
                        href="{{ route('aksi', ['kategori' => $kategorinya->id]) }}">{{ $kategorinya->nama_kategori }}</a>
                </div>
            </div>
            <div class="lower-content">
                {{-- <div class="text" style="padding: 32px 30px 7px 40px;"> --}}
                <div class="text" style="height:130px;">
                    {{-- <h3><a href="{{ route('detail-donasi',$idnya) }}">{{substr($judul,0,40)}}..</a></h3> --}}
                    <h3>
                        <a href="{{ route('detail-donasi', $idnya) }}">
                            @if (strlen($judul) > 47)
                                {{ substr($judul, 0, 47) }}..
                            @else
                                {{ substr($judul, 0, 47) }}
                            @endif
                        </a>
                    </h3>
                </div>
                <div class="progress-box">
                    @if ($penerimaDonasi)
                        <div class="bar">
                            <div class="bar-inner count-bar" style="width: {{ ($peroleh / $target) * 100 }}%;">
                                <div class="count-text">{{ round(($peroleh / $target) * 100, 1) }}%
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <span style="font-size: 13px;width:100%;float: left;">
                                        Diperoleh
                                    </span>
                                    <br>
                                    <span style="font-size: 12px;width:100%;float: left;" class="mb-2">
                                        <b> Rp. {{ number_format($peroleh, 0, ',', '.') }} </b>
                                    </span>
                                </h6>
                            </div>

                            <div class="col-6">
                                <h6>
                                    <span style="font-size: 13px;width:100%;float: left;">
                                        Target
                                    </span>
                                    <br>
                                    <span style="font-size: 12px;width:100%;float: left;" class="mb-2">
                                        <b>Rp. {{ number_format($target, 0, ',', '.') }}</b>
                                    </span>
                                </h6>
                            </div>
                        </div>
                    @endif
                    <div class="row mt-1">
                        <div class="col-4">
                            <a href="{{ route('detail-donasi', $idnya) }}">
                                <button class="btn btn-primary btn-block" style="font-size: 13px;width:100%;">
                                    <i class="icon-16"></i> {{ $jumlahKomentar }}
                                </button>
                            </a>
                        </div>
                        <div class="col-4">
                            @if (Auth::check())
                                @if ($saya)
                                    <button class="btn btn-danger btn-block" wire:click="like">
                                        <span style="font-size: 13px;width:100%;float: left;"><i
                                                class="fa fa-heart"></i> {{ $jumlahLike }}
                                        </span>
                                    </button>
                                @else
                                    <button class="btn btn-secondary btn-block" wire:click="like">
                                        <span style="font-size: 13px;width:100%;float: left;"><i
                                                class="fa fa-heart"></i> {{ $jumlahLike }}
                                        </span>
                                    </button>
                                @endif
                            @else
                                <button class="btn btn-secondary btn-block" wire:click="like">
                                    <span style="font-size: 13px;width:100%;float: left;"><i class="fa fa-heart"></i>
                                        {{ $jumlahLike }}
                                    </span>
                                </button>
                            @endif
                        </div>
                        <div class="col-4">
                            
                            <button class="btn btn-warning btn-block" style="font-size: 13px;width:100%;"
                                data-toggle="modal" data-target="#exampleModalCenter"
                                wire:click="$emit('link', '{{ route('detail-donasi', $idnya) }}')">
                                <i class="fa fa-share"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end web --}}
