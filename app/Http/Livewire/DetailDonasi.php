<?php

namespace App\Http\Livewire;

use App\Models\Aksi;
use App\Models\Kategori;
use Livewire\Component;
use Illuminate\Http\Request;

class DetailDonasi extends Component
{
    public $getId;
    public $datanya;
    public $kategoris;
    public $donasi;

    public function mount($id)
    {
        $this->show($id);
        $this->getCategory();
        $this->otherDonation($id);
    }
    public function render()
    {
        return view('livewire.detail-donasi');
    }
    
    public function show($id)
    {
        $this->datanya = Aksi::with('kategorinya', 'sampul')->find($id);
    }

    public function getCategory()
    {
        $this->kategoris = Kategori::orderBy('nama_kategori', 'asc')->get();
    }

    public function otherDonation($id)
    {
        $this->donasi = Aksi::with('kategorinya', 'sampul')
                        ->wherenotin('id', [$id])
                        ->orderBy('created_at', 'asc')
                        // ->limit(1)
                        ->first();

                    
    }

    
}
