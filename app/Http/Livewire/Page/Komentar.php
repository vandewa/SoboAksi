<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Komentar as Comment;
use App\Models\Aksi;

class Komentar extends Component
{
    public $body;
    public $aksi;
    public $idnya;

    public function mount($idnya)
    {
        $this->aksi = Aksi::find($idnya)->id;
    }

    public function render()
    {
        return view('livewire.page.komentar');
    }

    public function store()
    {
        dd($this->body);
        $this->validate([
            'body' => 'required'
        ]);
        Comment::create([
            'user_id' => Auth::user()->id,
            'aksi_id' => $this->aksi,
            'body' => $this->body
        ]);
    }
}
