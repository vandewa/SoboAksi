<?php

namespace App\Http\Livewire\Global;

use Livewire\Component;

class IsianModal extends Component
{

    public $su;

    protected $listeners = ['link'];

    public function link($a)
    {
        $this->su = $a;
    }
    public function render()
    {
        return view('livewire.global.isian-modal');
    }

}