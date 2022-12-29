<div>
    <section class="feature-section p_relative sec-pad centred">
        <div class="auto-container">
            <div class="sec-title centred mb_50">
                <span class="sub-title">Kategori</span>
                <h2>Aksi Kemanusiaan</h2>
            </div>
            <div class="row clearfix">
                @foreach($kategori as $data)
                <div class="col-lg-2 col-md-2 col-sm-3 feature-block mb-3">
                    <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box" style="padding: 30px 60px 17px 60px !important;">
                            <div class="icon-box">
                                <img src="{{ asset('trusthand/assets/images/icons/'.$data->icon)}}" alt="">
                            </div>
                            <div class="d-flex justify-content-center">
                                <h3><a href="{{ route('aksi', ['kategori' => $data->id]) }}">{{ $data->nama_kategori }}</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
