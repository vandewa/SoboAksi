<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\Aksi;

class MobilePostingku extends Component
{
    public function render()
    {
        $data = Aksi::with(['sampul', 'penerimaDonasi'])->where('creator_id', auth()->user()->id)->where('publish_st', 'PUBLISH_ST_01')->orderBy('publish_at', 'desc')->get();
        $count = Aksi::with(['sampul'])->where('creator_id', auth()->user()->id)->count();

        // dd($data);
        return view('livewire.page.mobile-postingku',[
            "data" => $data,
            "count" => $count
        ]);
    }
}
