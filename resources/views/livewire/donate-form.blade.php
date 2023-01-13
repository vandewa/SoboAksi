<div>
<div id="registrasi-popup" class="donate-popup {{$modal ? "popup-visible": ""}}">
    <div class="close-donate" wire:click="tutupModal" style="top:20px !important"><i class="fal fa-times"></i></div>
    <div class="popup-inner">
        <div class="donate-content">
            <div class="title-text centred">
                <h2>Jumlah Donasi Anda</h2>
            </div>
            <form action="" wire:submit.prevent="simpanDonasi" method="post" class="default-form">
                <div class="row clearfix">
                    <div class=" col-md-12 col-sm-12 donate-column">
                        <div class="donate-box">
                            <div class="donate-option">
                                <h3>Berapa Banyak?</h3>
                                <div class="donate-list">
                                    <div class="row mb-3 flex-container">
                                        <div class="list-donasi" wire:click="tambahDonasi(5000)">5K</div>
                                        <div class="list-donasi" wire:click="tambahDonasi(10000)">10K</div>
                                        <div class="list-donasi" wire:click="tambahDonasi(20000)">20k</div>
                                        <div class="list-donasi" wire:click="tambahDonasi(50000)">50k</div>
                                        <div class="list-donasi" wire:click="tambahDonasi(100000)">100k</div>
                                    </div>
                                    <div class="nilai-donasi">
                                        <input type="text"  name="" id="" wire:model="amount">
                                        <p>{{ $terbilang }}</p>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Donasi</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .flex-conatiner{
        display: flex;
    }
.list-donasi{

    justify-content: space-between;
    border: 1px;
    padding: 4px;
    margin-right: 4px;
    color: white;
    text-align: center;
    border-radius: 20px;
    width: 100px;
    background: rgb(236, 6, 6);

}

</style>
</div>
