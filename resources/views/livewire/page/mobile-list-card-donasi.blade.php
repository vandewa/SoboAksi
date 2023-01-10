<div class="col-12">
    <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="inner-box">
            <div class="image-box">
                <figure class="image">
                    <a href="{{ route('detail-donasi',$idnya) }}">
                    <img src="{{ $sampul }}" style="width:400px;height:300px;background-size: cover;
                    background-position: center center;">
                    </a>
                </figure>
                <div class="category"><a href="{{ route('detail-donasi',$idnya) }}">{{$kategorinya->nama_kategori}}</a></div>
            </div>
            <div class="lower-content">
                <div class="text" style="padding: 32px 30px 7px 40px;">
                    <h3><a href="{{ route('detail-donasi',$idnya) }}">{{substr($judul,0,55)}}..</a></h3>
                </div>
                <div class="progress-box">
                    @if($penerimaDonasi)
                    <div class="bar">
                      <div class="bar-inner count-bar" style="width: {{ $peroleh/$target*100 }}%;">
                        <div class="count-text">{{ $peroleh/$target*100 }}%
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-6">
                          <h6>
                              <span style="font-size: 15px;width:100%;float: left;" >
                               Diperoleh
                              </span>
                              <br>
                              <span style="font-size: 12px;width:100%;float: left;" class="mb-2">
                                <b> Rp. {{ number_format($peroleh,0,',','.') }} </b>
                            </span>
                          </h6>
                      </div>
                     
                      <div class="col-6">
                          <h6>
                              <span style="font-size: 13px;width:100%;float: left;" >
                                Target
                              </span> 
                              <br>
                              <span style="font-size: 12px;width:100%;float: left;" class="mb-2">
                                <b>Rp. {{ number_format($target,0,',','.') }}</b>
                              </span>
                          </h6>
                      </div>
                    </div>
                    @endif
                    <div class="row mt-1">
                        <div class="col-6">
                            <button class="btn btn-primary btn-block" style="font-size: 12px;width:100%;">0 
                                <i class="icon-16"> Komentar</i>
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-danger btn-block" style="font-size: 12px;width:100%;" wire:click="like"> {{ $jumlahLike }} <i class="fa fa-heart"> Suka</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>