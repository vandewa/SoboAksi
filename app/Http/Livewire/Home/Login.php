<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class Login extends Component
{
    public $lupa = false;
    public function render()
    {
        return view('livewire.home.login');
    }

    public function lupaPassword()
    {
        $this->lupa = !$this->lupa;
    }
}
