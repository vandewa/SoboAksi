<div>
    <div class="row">
        <div class="col-md-4">
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ $jmbt ?? 'asu' }}" target="_blank">
                <img src="{{ asset('fb.png') }}" alt="" height="100" width="200">
                <center><span style="color: black;">Facebook</span></center>
            </a>
        </div>
        <div class="col-md-4">
            <a href="https://twitter.com/intent/tweet?url={{ $jmbt ?? 'asu' }}" target="_blank">
                <img src="{{ asset('twitter.png') }}" alt="" height="100" width="200">
                <center><span style="color: black;">Twitter</span></center>
            </a>
        </div>
        <div class="col-md-4">
            <a href="https://api.whatsapp.com/send?text={{ $jmbt ?? 'asu' }}" target="_blank"><img
                    src="{{ asset('wa.png') }}" alt="" height="100" width="200">
                <center><span style="color: black;">WhatsApp</span></center>
            </a>
        </div>
    </div>

</div>
