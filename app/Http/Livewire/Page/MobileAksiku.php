<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\Aksi;

class MobileAksiku extends Component
{
    public function render()
    {
        $data = Aksi::with(['sampul'])->where('creator_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        $count = Aksi::with(['sampul'])->where('creator_id', auth()->user()->id)->count();
        return view('livewire.page.mobile-aksiku',[
            "data" => $data,
            "count" => $count
        ]);
    }

}
