<?php

namespace App\Http\Livewire\Home;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $lupa = false;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.home.login');
    }

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function userlogin()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('home');
        } else {
            session()->flash('message', 'Alamat Email atau Password Anda salah!.');
            $this->emit('alert_remove');
            return;
        }
    }


    public function lupaPassword()
    {
        $this->lupa = !$this->lupa;
    }
}
