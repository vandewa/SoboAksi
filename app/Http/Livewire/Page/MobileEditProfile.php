<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\User;

class MobileEditProfile extends Component
{
    public $email;
    public $nama;
    public $nik;
    public $nomor_hp;
    public $alamat;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount()
    {
        $user = User::find(auth()->user()->id);
        $this->email =  $user->email;
        $this->nama =  $user->name;
        $this->nik =  $user->nik;
        $this->nomor_hp =  $user->nomor_hp;
        $this->alamat =  $user->alamat;
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
        $data->nik = $this->nik;
        $data->nomor_hp = $this->nomor_hp;
        $data->alamat = $this->alamat;
        $data->save();
        return redirect()->to('/edit-profile');
    }
}
