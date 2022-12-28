<?php

namespace App\Http\Livewire;

use App\Models\ComCode;
use App\Models\ComRegion;
use App\Models\Penerima;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Aksi as Beraksi;
use App\Models\Kategori;

class DonatePopup extends Component
{
    use WithFileUploads;

    public $modal = false;
    public $photo;
    public $judul;
    public $kategori = 1;
    public $listKategori;
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
    public $alamat;
    public $telepon;
    public $jenisIdentitas;
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
       $this->getJenisIdentitas();
       $this->getListKategori();
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

    public function simpan()
    {
        if($this->denganPenerima){
            $penerima = Penerima::create(
                [
                    "nama" => $this->nama,
                    "alamat" => $this->alamat,
                    "region_prop" => $this->region_prop,
                    "region_kab" => $this->region_kab,
                    "region_kec" => $this->region_kec,
                    "region_kel" => $this->region_kel,
                    "alamat" => $this->alamat,
                    "telepon" => $this->telepon,
                    "no_identitas" => $this->no_identitas,

                ]
            );
        } else {
            $this->validate(
                [
                    "judul" => "required",
                    "kategori" => "required",
                    "deskripsi" => "required",
                ]
            );

            $path = $this->photo->store('aksi', 'public');
            $data = Beraksi::create([
                "judul" => $this->judul,
                "kategori" => $this->kategori,
                "deskripsi" => $this->deskripsi,
                "setuju" => true,
                "creator_id" => auth()->user()->id,

            ]);
            $data->sampul()->create(
                [
                    "url" => $path
                ]
            );

            $this->tampilModal();

            return redirect()->to('aksi');
            $this->emitTo('page.aksi', 'newAksi', $data->id);
        }
    }

    public function getListKategori()
    {
        $this->listKategori = Kategori::all();
    }
    public function getJenisIdentitas()
    {
        $this->jenisIdentitas = ComCode::where("code_group", "IDENTITAS_ST")->get();
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
