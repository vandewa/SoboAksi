<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\Aksi as Beraksi;

class Aksi extends Component
{
    public function render()
    {
        $aksi = Beraksi::with(['kategorinya'])->withCount("dukung")->paginate(9);
        return view('livewire.page.aksi', [
            "aksi" => $aksi
        ]);
    }
}
