<?php

namespace App\Http\Livewire\Global;

use Livewire\Component;
use App\Models\Aksi;
use App\Models\AksiDukung;
use App\Models\AksiPhoto;
use Illuminate\Support\Facades\Auth;

class CardDonasi extends Component
{
    public $idnya;
    public $kategori;
    public $judul;
    public $deskripsi;
    public $kategorinya;
    public $jumlahLike;
    public $penerimaDonasi;

    public function mount($data)
    {
        $this->idnya = $data->id;
        $this->kategori = $data->kategori;
        $this->judul = $data->judul;
        $this->deskripsi = $data->deskripsi;
        $this->kategorinya = $data->kategorinya;
        $this->jumlahLike = $data->dukung_count;
        $this->penerimaDonasi = $data->penerimaDonasi;
    }

    public function render()
    {        
        return view('livewire.global.card-donasi');
    }

    public function like()
    {
        if (!Auth::check()) {
            return false;
        }
        $data = AksiDukung::where("aksi_id", $this->idnya)->where("creator_id", auth()->user()->id??1)->first();
        if($data){
            $data->delete();
            $this->jumlahLike --;
        }else {
            $a = AksiDukung::create(
                [
                    "aksi_id" => $this->idnya,
                    "creator_id" => auth()->user()->id??1
                ]
            );
            $this->jumlahLike ++;
        }
    }


}
