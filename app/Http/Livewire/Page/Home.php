<?php

namespace App\Http\Livewire\Page;

use App\Models\Aksi;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $aksi = Aksi::with(['kategorinya', 'penerimaDonasi'])->withCount("dukung")->withCount("komentar")->whereHas('penerimaDonasi')->orderBy('publish_at', 'desc')->where('highlight', 1)->where('publish_st', 'PUBLISH_ST_01')->get();
        return view('livewire.page.home', [
            "aksi" => $aksi
        ]);
    }

}
