<?php

namespace App\Http\Livewire\Global;

use Livewire\Component;

class IsianModal extends Component
{

    public $jmbt;

    protected $listeners = ['link'];

    public function link($a)
    {
        $this->jmbt = $a;
        // dd($this->jmbt);
    }
    public function render()
    {
        return view('livewire.global.isian-modal');
    }

}