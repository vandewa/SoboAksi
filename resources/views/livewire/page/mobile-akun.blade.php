<a href="{{ url()->previous() }}">
    <div class="round"><i class="fa fa-arrow-left" aria-hidden="true" style="height:10px !important;"></i></div>
</a>
<div class="kanan">
    <i class="fa fa-edit fa-lg" style="font-weight:0 !important;"></i></i>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <img src="https://diskominfo.wonosobokab.go.id/uploads/2023/Januari/20230106080233-1_1008.jpg" alt="" class="avatar">
        </div>
        <div class="col-12 d-flex justify-content-center mt-2">
            <span>
                <b>{{ auth()->user()->email??'devandewananta@gmail.com' }}</b>
            </span>
            <br>
        </div>
        <div class="col-12 d-flex justify-content-center mb-2">
            <span>
                {{ auth()->user()->name??'Devan Dewananta' }}
            </span>
        </div>
        <div class="col-1"></div>
        <div class="col-10"><hr></div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-12 mt-2 ml-4 mb-1">
            <a href="{{ route('donasiku') }}" style="color: black;">
                <i class="fas fa-donate"></i>
                <span>
                    &nbsp; Donasiku
                </span>
            </a>
        </div>
        <div class="col-12 mt-2 ml-4 mb-1">
            <a href="{{ route('postingku') }}" style="color: black;">
                <i class="fa fa-comment" aria-hidden="true"></i>
                <span>
                    &nbsp; Posting
                </span>
            </a>
        </div>
        <div class="col-12 mt-5 ml-4">
            <a href="{{ route('logout') }}" style="color: black;">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                <span>
                    &nbsp; Logout
                </span>
            </a>
        </div>
    </div>
</div>