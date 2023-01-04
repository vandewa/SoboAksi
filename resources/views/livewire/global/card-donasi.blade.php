<div class="containere">
 
    {{-- <div class="content-wrapper"> --}}
    
      <div class="child">
        <h1>CSS-only horizontal scroll tentative</h1>
        <p>The idea is to create an horizontal scroll layout and to allow the user to scroll up/down the mouse to scroll left/right.</p>
        <p>So… please scroll <strong>down</strong> with your mouse.</p>
      </div>
  
      <div class="child">
        <h2>The trick</h2>
        <p>Rotate -90deg the container, and 90deg its children blocks.</p>
        <p>You have to fix container and children dimensions. :(</p>
        <p>See CSS for rather correct positioning.</p>
      </div>
  
      <div class="child">
        <h2>Desktop browsers</h2>
        <p>Vertical scroll… scrolls. :)</p>
        <p>But horizontal scroll (e.g. with a trackpad) doesn’t. :(</p>
      </div>
  
      <div class="child">
        <h2>Mobile browsers</h2>
        <p>Only horizontal touchmove works on Chrome. :)</p>
        <p>Only vertical touchmove works on Safari and Firefox. :(</p>
      </div>
  
  
      <div class="child">
        <h2>Conclusion</h2>
        <p>Without JavaScript: no good idea.</p>
      </div>
  
    {{-- </div> --}}
    
  </div>




{{-- start web --}}
{{-- <div class="col-lg-4 col-md-6 col-sm-12 cause-block mb-3">
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
</div> --}}
{{-- end web --}}
        
     