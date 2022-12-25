<?php

namespace App\Http\Livewire\Home;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

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
        'password' => 'required',
        'password_confirmation' => 'required|same:password',
    ];

    public function simpan()
    {
        $this->validate();
        User::create(
            [
                "name" => $this->name,
                "email" => $this->email,
                "tgl_lahir" => $this->tgl_lahir,
                "nomor_hp" => $this->nomor_hp,
                "password" => Hash::make($this->password),

            ]
            );
    }
}
