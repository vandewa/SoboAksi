<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class FormRegister extends Component
{
    public $name;
    public $email;
    public $password;
    public $tgl_lahir;
    public $nomor_hp;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.home.form-register');
    }
    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email|unique:users',
        'tgl_lahir' => 'required|date|before:today',
        'nomor_hp' => 'required|date',
    ];

    public function simpan()
    {

    }
}
