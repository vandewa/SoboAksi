<?php

namespace App\Http\Livewire;

use App\Models\Kategori;
use Livewire\Component;

class Category extends Component
{
    public function render()
    {
        return view('livewire.category', [
            'kategori' => Kategori::orderBy('nama_kategori', 'asc')->get()
        ]);
    }
}
