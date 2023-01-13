<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\User;

class MobileEditProfile extends Component
{
    public $email;
    public $nama;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount()
    {
        $user = User::find(auth()->user()->id);
        $this->email =  $user->email;
        $this->nama =  $user->name;
        $this->nik =  $user->nik;
        $this->nama =  $user->name;
        $this->nama =  $user->name;
        $this->nama =  $user->name;
        $this->nama =  $user->name;
    }

    public function render()
    {
        return view('livewire.page.mobile-edit-profile');
    }

    public function editProfile()
    {
        $data = User::find(auth()->user()->id);
        $data->email = $this->email;
        $data->name = $this->nama;
        $data->save();
        return redirect()->to('/edit-profile');
    }
}
