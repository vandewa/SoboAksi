<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Registrasi extends Component
{
    public $modal = false;
    public $registrasi = false;
    public $lupa = false;
    public $name;

    protected $listeners = ["tampilModal", "lupaPassword", 'register'];

    public function tampilModal()
    {
        $this->modal = !$this->modal;
    }

    public function render()
    {
        return view('livewire.registrasi');
    }

    public function register()
    {
        $this->registrasi = !$this->registrasi;
    }

    public function lupaPassword()
    {
        $this->lupa = !$this->lupa;
    }
}
