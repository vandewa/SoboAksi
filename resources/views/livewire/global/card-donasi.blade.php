
{{-- start web --}}
  <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
    <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="inner-box">
            <div class="image-box">
                <figure class="image">
                    <a href="{{ route('detail-donasi',$idnya) }}">
                    <img src="{{ $sampul }}" style="width:350px;height:200px;background-size: cover;
                    background-position: center center;">
                    </a>
                </figure>
                <div class="category"><a href="{{ route('detail-donasi',$idnya) }}">{{$kategorinya->nama_kategori}}</a></div>
            </div>
            <div class="lower-content">
                <div class="text" style="padding: 32px 30px 7px 40px;">
                    <h3><a href="{{ route('detail-donasi',$idnya) }}">{{substr($judul,0,40)}}..</a></h3>
                    {{-- <p>{{substr($deskripsi,0,50)}}..</p> --}}
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
                        <div class="col-md-6">
                          <li class="admin">
                            <button class="btn btn-primary btn-block">
                              <span style="font-size: 13px;width:100%;float: left;">
                               100 <i class="icon-16"></i> 
                              </span>
                            </button>
                          </li>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-danger btn-block" wire:click="like">
                              <span style="font-size: 13px;width:100%;float: left;">{{ $jumlahLike }} <i class="fa fa-heart"></i> 
                                
                              </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
{{-- end web --}}
