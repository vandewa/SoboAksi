<?php

namespace App\Http\Livewire\Global;

use Livewire\Component;
use App\Models\Aksi;


class CardDonasi extends Component
{
    public $kategori;
    public $judul;
    public $deskripsi;
    public $kategorinya;

    public function mount($data)
    {
        $this->kategori = $data->kategori;
        $this->judul = $data->judul;
        $this->deskripsi = $data->deskripsi;
        $this->kategorinya = $data->kategorinya;
    }

    public function render()
    {
        
        return view('livewire.global.card-donasi');
    }


}
