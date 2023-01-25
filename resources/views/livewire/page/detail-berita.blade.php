<div>
      <!-- Page Title -->
      <section class="page-title-two">
        <div class="bg-layer" style="background-image: url(https://diskominfo.wonosobokab.go.id/{{ $berita["gambar_muka"] ["path"] }}{{ $berita["gambar_muka"] ["file_name"] }});"></div>
        <div class="auto-container d-flex justify-content-center">
            <div class="content-box">
                <h3 style="color: white;font-size:25px !important;">{{ $berita["judul_posting"] }}</h3 style="color: white;"><br>
                <ul class="post-info clearfix">
                    <li><i class="far fa-calendar"></i>{{ Carbon\Carbon::parse($berita["created_at"])->isoFormat('LLLL') }}
                        WIB</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- sidebar-page-container -->
    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="content-one">
                            <div class="text">
                               <p>{!! $berita["isi_posting"] !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->
    <div class="d-block d-md-none">
        <livewire:page.footer/>
    </div>
  
</div>
