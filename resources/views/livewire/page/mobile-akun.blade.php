<a href="{{ url()->previous() }}">
    <div class="round"><i class="fa fa-arrow-left" aria-hidden="true" style="height:10px !important;"></i></div>
</a>
<div class="kanan">
    <a href="{{ route('edit-profile') }}">
        <i class="fa fa-edit fa-lg" style="font-weight:0 !important;"></i></i>
    </a>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <img src="{{ asset('trusthand/assets/images/sobo-avatar.png') }}" alt="" class="avatar">
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
                <i class="fa-solid fa-hand-holding-dollar fa-beat" style="--fa-animation-duration: 1.5s;"></i>
                <span>
                    &nbsp; Donasiku 
                </span>
            </a>
        </div>
        <div class="col-12 mt-2 ml-4 mb-1">
            <a href="{{ route('postingku') }}" style="color: black;">
                <i class="fa-solid fa-comment-dots fa-beat" style="--fa-animation-duration: 1.6s;"></i>
                <span>
                    &nbsp; Postingan
                </span>
            </a>
        </div>
        <div class="col-12 mt-2 ml-4 mb-1">
            <a href="{{ route('ganti-password') }}" style="color: black;">
                <i class="fa-solid fa-key fa-beat" style="--fa-animation-duration: 1.7s;"></i>
                <span>
                    &nbsp; Ganti Password
                </span>
            </a>
        </div>
        <div class="col-12 mt-5 ml-4">

            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: black;">
                <i class="fa-solid fa-right-from-bracket fa-beat" style="--fa-animation-duration: 1.8s;"></i>
                    <span>
                        &nbsp; Logout
                    </span>
            
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </a>
        </div>
    </div>
</div>

<livewire:page.footer/>