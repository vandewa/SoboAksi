<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Exception;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Client\RequestException;

class Article extends Component
{
    public $article = [];
    public $lastPage;
    public $from;
    public $currentpage;

    public function mount()
    {
        $response = Http::withoutVerifying()->retry(5, 1000)->get('https://diskominfo.wonosobokab.go.id/api/news');

        if($response->clientError()){
            $this->article = [];
        } else {
            $response = $response->collect();

            $this->article =   array_slice($response['data']['data'], 0, 4);
        }
    }


    public function render()
    {
        return view('livewire.article');
    }
}
