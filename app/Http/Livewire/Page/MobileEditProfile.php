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

    // public $provinsi;
    // public $kabupaten;
    // public $selectedProv = NULL;

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
        // $this->provinsi =  get_prov();
        // $this->kabupaten =  collect();
        $this->region_prop =  $user->region_prop;
        $this->region_kab =  $user->region_kab;
        $this->region_kec =  $user->region_kec;
        $this->region_kel =  $user->region_kel;
    }

    public function render()
    {
        $data = User::find(auth()->user()->id);
        $kabupaten = ComRegion::where('region_cd', $data->region_kab)->pluck('region_cd', 'region_nm');
        $kecamatan = ComRegion::where('region_cd', $data->region_kec)->pluck('region_cd', 'region_nm');
        $kelurahan = ComRegion::where('region_cd', $data->region_kel)->pluck('region_cd', 'region_nm');
        return view('livewire.page.mobile-edit-profile', compact('data', 'kabupaten', 'kecamatan', 'kelurahan'));
    }

    // public function updatedSelectedProv($id)
    // {
    //     if (!is_null($id)) {
    //         $this->kabupaten = get_kab($id);
    //     }
    // }

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
        $data->region_kab = $this->region_kab;
        $data->region_kec = $this->region_kec;
        $data->region_kel = $this->region_kel;
        $data->save();
        return redirect()->to('/edit-profile');
    }
}
