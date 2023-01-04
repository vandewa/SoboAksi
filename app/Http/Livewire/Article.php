<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Article extends Component
{
    public $article = [];
    public $lastPage;
    public $from;
    public $currentpage;

    public function mount()
    {
        $response = Http::withoutVerifying()->get('https://diskominfo.wonosobokab.go.id/api/news');
        $response = $response->collect();
        $this->article =   array_slice($response['data']['data'], 0, 4);
    }


    public function render()
    {

        return view('livewire.article');
    }
}
