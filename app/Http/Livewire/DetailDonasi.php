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
    public $sampul;

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
        $data = Aksi::with(['kategorinya', 'penerimaDonasi'])->withCount("dukung")->find($id);
        $this->datanya = $data;
        $this->sampul = $data->sampul->url_photo?? asset('trusthand/assets/images/resource/cause-1.jpg');
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
