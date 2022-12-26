<?php

namespace App\Http\Livewire\Global;

use Livewire\Component;
use App\Models\Aksi;


class CardDonasi extends Component
{
    public $kategori;
    public $judul;
    public $deskripsi;

    public function mount()
    {
        //
    }

    public function render()
    {
        $aksi = Aksi::with('kategorinya')->limit(3)->get();
        return view('livewire.global.card-donasi',[
            "aksi" => $aksi
        ]);
    }


}
