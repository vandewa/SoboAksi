
        <div class="col-lg-4 col-md-6 col-sm-12 cause-block mb-3">
            <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="causes-details.html"><img src="{{ $sampul }}" alt=""  style="width:410px;height:270px;background-size: cover;
                            background-position: center center;"></a></figure>
                        <div class="category"><a href="causes-details.html">{{$kategorinya->nama_kategori}}</a></div>
                    </div>
                    <div class="lower-content">
                        <div class="text">
                            <h3><a href="causes-details.html">{{$judul}}</a></h3>
                            <p>{{$deskripsi}}</p>
                        </div>
                        <div class="progress-box">
                            @if($penerimaDonasi)
                            <div class="bar">
                                <div class="bar-inner count-bar" style="width: 85%;"><div class="count-text">85%</div></div>
                            </div>

                            <div class="donate-text">

                                <h6><span>$5,020</span> Raised</h6>
                                <h6><span>$8,000</span> Target</h6>

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
