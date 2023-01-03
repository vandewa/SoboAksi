
        <div class="col-lg-4 col-md-6 col-sm-12 cause-block mb-3">
            <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="{{ route('detail-donasi',$idnya) }}">
                            <img src="{{ $sampul }}" style="width:410px;height:270px;background-size: cover;
                            background-position: center center;">
                            </a>
                        </figure>
                        <div class="category"><a href="{{ route('detail-donasi',$idnya) }}">{{$kategorinya->nama_kategori}}</a></div>
                    </div>
                    <div class="lower-content">
                        <div class="text">
                            <h3><a href="{{ route('detail-donasi',$idnya) }}">{{$judul}}</a></h3>
                            <p>{{substr($deskripsi,0,50)}}..</p>
                        </div>
                        <div class="progress-box">
                            @if($penerimaDonasi)
                            <div class="bar">
                                <div class="bar-inner count-bar" style="width: {{ $peroleh/$target*100 }}%;"><div class="count-text">{{ $peroleh/$target*100 }}%</div></div>
                            </div>

                            <div class="donate-text">

                                <h6><span>Rp. {{ number_format($peroleh,0,',','.') }}</span> Diperoleh</h6>
                                <h6><span>Rp. {{ number_format($target,0,',','.') }}</span> Target</h6>

                            </div>
                            @endif
                            <div class="row mt-1">
                                <div class="col-md-6">
                                    <button class="btn btn-primary btn-block"> 0 <i class="icon-16"></i> Komen</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-warning btn-block" wire:click="like"> {{ $jumlahLike }} <i class="fa fa-heart"></i> Suka</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
