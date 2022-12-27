<?php

namespace App\Http\Livewire;

use App\Models\ComRegion;
use Livewire\Component;
use Livewire\WithFileUploads;

class DonatePopup extends Component
{
    use WithFileUploads;

    public $modal = false;
    public $photo;
    public $judul;
    public $kategori;
    public $deskripsi;
    public $setuju;
    public $denganPenerima = false;
    public $penerima_id;
    public $target_donasi;
    public $target_waktu;
    public $nama;
    public $region_prop;
    public $region_kab;
    public $region_kec;
    public $region_kel;
    public $telepon;
    public $kode_identitas;
    public $no_identitas;
    public $foto_ktp;
    public $foto_penerima;
    public $provinsis;
    public $kabupatens;
    public $kecamatans;
    public $desas;

    protected $listeners = ["tampilModal" => "tampilModal"];

    public function mount()
    {
       $this->getProvinsi();
    }

    public function tampilModal()
    {
        $this->modal = !$this->modal;
    }
    public function render()
    {
        return view('livewire.donate-popup');
    }
    public function galangDana()
    {
        $this->denganPenerima = !$this->denganPenerima;
    }

    public function getProvinsi()
    {
        $data = ComRegion::where('region_level', 1)->get();
        $this->provinsis = $data;
        $this->region_prop = $data->first()->region_cd;
        $this->getKabupaten();
    }
    public function getKabupaten()
    {
        $data =  ComRegion::where('region_root', $this->region_prop)->get();
        $this->kabupatens = $data;
        $this->region_kab = $data->first()->region_cd;
        $this->getKecamatan();
    }
    public function getKecamatan()
    {
        $data = ComRegion::where('region_root', $this->region_kab)->get();
        $this->kecamatans = $data;
        $this->region_kec = $data->first()->region_cd;
        $this->getKelurahan();
    }
    public function getKelurahan()
    {
        $data = ComRegion::where('region_root', $this->region_kec)->get();
        $this->desas = $data;
        $this->region_kel = $data->first()->region_cd??"";
    }
}
