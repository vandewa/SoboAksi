<?php

namespace App\Http\Livewire\Page;

use App\Models\ComCode;
use App\Models\ComRegion;
use Livewire\Component;
use App\Models\User;

class MobileEditProfile extends Component
{
    public $email;
    public $nama;
    public $nik;
    public $nomor_hp;
    public $alamat;
    public $jKel;
    public $pekerjaan_st;
    public $region_prop;
    public $region_kab;
    public $region_kec;
    public $region_kel;

    public $provinsi;
    public $kabupaten;
    public $kecamatan;
    public $kelurahan;
    public $selectedProv = NULL;
    public $selectedKab = NULL;
    public $selectedKec = NULL;
    public $selectedKel = NULL;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount()
    {
        $user = User::find(auth()->user()->id);
        $this->email =  $user->email;
        $this->nama =  $user->name;
        $this->nik =  $user->nik;
        $this->nomor_hp =  $user->nomor_hp;
        $this->alamat =  $user->alamat;
        $this->jKel =  $user->jenis_kelamin_st;
        $this->pekerjaan_st =  $user->pekerjaan_st;

        $this->selectedProv =  $user->region_prop;
        $this->provinsi =  get_prov();

        $this->selectedKab =  $user->region_kab;
        // $this->kabupaten =  get_kab($this->selectedProv);

        $this->selectedKec =  $user->region_kec;
        // $this->kecamatan =  get_kec($this->selectedKab);

        $this->selectedKel =  $user->region_kel;
        // $this->kelurahan =  collect();
    }

    public function render()
    {
        return view('livewire.page.mobile-edit-profile');
    }

    public function updatedSelectedProv($id)
    {
        if (!is_null($id)) {
            $this->kabupaten = get_kab($id);
        }
    }

    public function updatedselectedKab($id)
    {
        if (!is_null($id)) {
            $this->kecamatan = get_kec($id);
        }
    }

    public function updatedselectedKec($id)
    {
        if (!is_null($id)) {
            $this->kelurahan = get_kel($id);
        }
    }

    public function editProfile()
    {
        $data = User::find(auth()->user()->id);
        $data->email = $this->email;
        $data->name = $this->nama;
        $data->nik = $this->nik;
        $data->nomor_hp = $this->nomor_hp;
        $data->alamat = $this->alamat;
        $data->jenis_kelamin_st = $this->jKel;
        $data->pekerjaan_st = $this->pekerjaan_st;
        $data->region_prop = $this->selectedProv;
        $data->region_kab = $this->selectedKab;
        $data->region_kec = $this->selectedKec;
        $data->region_kel = $this->selectedKel;
        $data->save();
        return redirect()->to('/edit-profile');
    }
}
