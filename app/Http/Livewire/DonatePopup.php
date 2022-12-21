<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DonatePopup extends Component
{
    public $modal = false;

    protected $listeners = ["tampilModal" => "tampilModal"];

    public function tampilModal(){
        $this->modal = !$this->modal;
    }
    public function render()
    {
        return view('livewire.donate-popup');
    }
}
