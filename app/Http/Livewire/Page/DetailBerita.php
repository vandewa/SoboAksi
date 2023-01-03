<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use Illuminate\Support\Facades\Http;


class DetailBerita extends Component
{

    public $berita;

    public function mount($id)
    {
        $response = Http::withoutVerifying()->get('https://diskominfo.wonosobokab.go.id/api/news/'.$id);
        $response = $response->collect();
        $this->berita = $response['data'];

        // dd($this->berita);

    }

    public function render()
    {
        return view('livewire.page.detail-berita');
    }

}
