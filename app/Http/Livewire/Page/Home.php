<?php

namespace App\Http\Livewire\Page;

use App\Models\Aksi;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $aksi = Aksi::with(['kategorinya', 'penerimaDonasi'])->withCount("dukung")->withCount("komentar")->whereHas('penerimaDonasi')->orderBy('publish_at', 'desc')->limit(3)->get();
        return view('livewire.page.home', [
            "aksi" => $aksi
        ]);
    }

}
