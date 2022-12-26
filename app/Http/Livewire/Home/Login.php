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
        // $credentials = $request->only('email', 'password');
        // if (Auth::attempt($credentials)) {
        //     return 'berhasil login';
        //     return redirect('/dashboard');
        // } else {
        //     return 'gagal login';
        //     return redirect('/login')->with('error', 'Invalid Email address or Password');
        // }
    }

    public function lupaPassword()
    {
        $this->lupa = !$this->lupa;
    }
}
