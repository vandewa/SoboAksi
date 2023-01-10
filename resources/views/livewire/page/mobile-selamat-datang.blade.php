
<div>
    <div class="d-block d-md-none">
        @if(Auth::check())
        <div class="container mt-4">
            <div class="row">
                <div class="col-3 ml-4 d-flex justify-content-end">
                    <img src="https://diskominfo.wonosobokab.go.id/uploads/2023/Januari/20230106080233-1_1008.jpg" alt="" class="avatar">
                </div>
                <div class="col-8">
                    <span style="font-size: 12px;">Selamat Datang!</span>
                    <br>
                    <span style="font-size: 17px;"><b>{{ auth()->user()->name??'' }}</b></span>
                </div>
            </div>
            <hr>
        </div>
        @endif
    </div>
</div>

{{-- @endif --}}
