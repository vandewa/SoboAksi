<?php

namespace App\Http\Livewire\Page;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GantiPassword extends Component
{
    public $password;
    public $password_confirmation;

    protected $listeners = ['refreshComponent' => '$refresh'];


    public function render()
    {
        return view('livewire.page.ganti-password');
    }

    protected $rules = [
        'password' => 'required',
        'password_confirmation' => 'required|same:password',
    ];


    public function gantiPassword()
    {
        $this->validate();
        $data = User::find(auth()->user()->id);
        $data->password = Hash::make($this->password);
        $data->save();

        Auth::logout();
        return redirect()->to('/');
    }
}
