<?php

namespace App\Http\Livewire;

use App\Models\Aksi;
use Livewire\Component;
use App\Models\Kategori;
use App\Models\ComRegion;
use Livewire\WithFileUploads;


class EditPostingan extends Component
{
    use WithFileUploads;

    public $modal = false;
    public $photo;
    public $photo2;
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
    public $kode_identitas = "IDENTITAS_ST_01";
    public $no_identitas;
    public $foto_ktp;
    public $foto_penerima;
    public $provinsis;
    public $kabupatens;
    public $kecamatans;
    public $desas;
    public $data;

    protected $listeners = ["tampilModal" => "tampilModal", Trix::EVENT_VALUE_UPDATED];

    public function trix_value_updated($value){
        $this->deskripsi = $value;
    }

    public function tampilModal($id)
    {
        $this->modal = !$this->modal;
        $aksi = Aksi::with(['sampul', 'penerimaDonasi'])->find($id);
        $this->judul = $aksi->judul;
        $this->getListKategori();
        $this->kategori = $aksi->kategori;
        $this->photo2 = $aksi->sampul->UrlPhoto;
        $this->deskripsi = $aksi->deskripsi;
        $this->denganPenerima = $aksi->penerimaDonasi == null ? false:true;
        $this->nama = $aksi->penerimaDonasi->penerima->nama;
    }

    public function getListKategori()
    {
        $this->listKategori = Kategori::all();
    }

    public function getProvinsi()
    {
        $data = ComRegion::where('region_level', 1)->get();
        $this->provinsis = $data;
        $this->region_prop = $data->first()->region_cd;
        $this->getKabupaten();
    }

    public function mount ()
    {
        // 
    }

    public function render()
    {
        return view('livewire.edit-postingan', [
            'data' => $this->data
        ]);
    }


}
