<?php

namespace App\Http\Livewire\Page;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GantiPassword extends Component
{
    public $password;

    protected $listeners = ['refreshComponent' => '$refresh'];


    public function render()
    {
        return view('livewire.page.ganti-password');
    }

    public function gantiPassword()
    {
        $data = User::find(auth()->user()->id);
        $data->password = Hash::make($this->password);
        $data->save();

        Auth::logout();
        return redirect()->to('/');
    }
}
