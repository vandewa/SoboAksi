<?php

namespace App\Http\Livewire;

use App\Models\Aksi;
use App\Models\ComCode;
use Livewire\Component;
use App\Models\Kategori;
use App\Models\Penerima;
use App\Models\AksiPhoto;
use App\Models\ComRegion;
use App\Models\AksiPenerima;
use Livewire\WithFileUploads;
use App\Models\Aksi as Beraksi;
use Illuminate\Support\Facades\DB;

class DonatePopup extends Component
{
    use WithFileUploads;

    public $modal = false;
    public $photo;
    public $judul;
    public $keterangan;
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
    public $isEdit = false;
    public $idnya;
    public $photo2;
    public $foto_ktp2;
    public $foto_penerima2;

    protected $listeners = ["tampilModal" => "tampilModal", Trix::EVENT_VALUE_UPDATED, "tampilModal2", 'refreshComponent' => '$refresh'];

    public function trix_value_updated($value)
    {
        $this->deskripsi = $value;
    }


    public function mount()
    {
        $this->getProvinsi();
        $this->getJenisIdentitas();
        $this->getListKategori();
    }

    public function tampilModal()
    {
        $this->modal = !$this->modal;
        $this->photo = '';
        $this->judul = '';
        $this->keterangan = '';
        $this->kategori = 1;
        $this->deskripsi = '';
        $this->setuju = '';
        $this->denganPenerima = false;
        $this->penerima_id = '';
        $this->target_donasi = '';
        $this->target_waktu = '';
        $this->nama = '';
        $this->region_prop = '';
        $this->region_kab = '';
        $this->region_kec = '';
        $this->region_kel = '';
        $this->alamat = '';
        $this->telepon = '';
        $this->kode_identitas = "IDENTITAS_ST_01";
        $this->no_identitas = '';
        $this->foto_ktp = '';
        $this->foto_penerima = '';
        $this->isEdit = false;
        $this->idnya = '';
        $this->photo2 = '';
        $this->foto_ktp2 = '';
        $this->foto_penerima2 = '';
        $this->getProvinsi();
        $this->getJenisIdentitas();
        $this->getListKategori();

    }
    public function tampilModal2($id)
    {
        $this->modal = !$this->modal;
        $this->isEdit = true;
        $aksi = Aksi::with(['sampul', 'penerimaDonasi'])->find($id);
        $this->idnya = $aksi->id;
        $this->judul = $aksi->judul;
        $this->keterangan = $aksi->keterangan;
        $this->getListKategori();
        $this->kategori = $aksi->kategori ?? null;
        $this->photo2 = $aksi->sampul->UrlPhoto ?? null;
        $this->deskripsi = $aksi->deskripsi ?? null;
        $this->denganPenerima = $aksi->penerimaDonasi == null ? false : true;
        $this->nama = $aksi->penerimaDonasi->penerima->nama ?? null;
        $this->region_prop = $aksi->penerimaDonasi->penerima->region_prop ?? null;
        $this->getProvinsi();
        $this->alamat = $aksi->penerimaDonasi->penerima->alamat ?? null;
        $this->telepon = $aksi->penerimaDonasi->penerima->telepon ?? null;
        $this->getJenisIdentitas();
        $this->kode_identitas = $aksi->penerimaDonasi->penerima->kode_identitas ?? null;
        $this->foto_ktp2 = $aksi->penerimaDonasi->penerima->UrlKtp ?? null;
        $this->no_identitas = $aksi->penerimaDonasi->penerima->no_identitas ?? null;
        $this->foto_penerima2 = $aksi->penerimaDonasi->penerima->UrlPenerima ?? null;
        $this->target_donasi = $aksi->penerimaDonasi->target_donasi ?? null;
        $this->target_waktu = $aksi->penerimaDonasi->target_waktu ?? null;

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
        if ($this->denganPenerima) {
            $a = DB::transaction(function () {
                $this->validate(
                    [
                        "photo" => "required|image|max:1024",
                        "nama" => "required",
                        "alamat" => "required",
                        "region_prop" => "required",
                        "region_kab" => "required",
                        "region_kec" => "required",
                        "region_kel" => "required",
                        "alamat" => "required",
                        "telepon" => "required",
                        "no_identitas" => "required",
                        "foto_ktp" => "required|image|max:1024",
                        "foto_penerima" => "required|image|max:1024",
                        "judul" => "required",
                        "keterangan" => "required",
                        "kategori" => "required",
                        "deskripsi" => "required",
                        "target_donasi" => "required",
                        "target_waktu" => "required|date",
                    ]
                );
                $ktp = $this->foto_ktp->store('aksi/identitas/', 'public');
                $penerimafoto = $this->foto_penerima->store('aksi/penerima', 'public');
                $penerima = Penerima::create(
                    [
                        "nama" => $this->nama,
                        "alamat" => $this->alamat,
                        "region_prop" => $this->region_prop,
                        "region_kab" => $this->region_kab,
                        "region_kec" => $this->region_kec,
                        "region_kel" => $this->region_kel,
                        "kode_identitas" => $this->kode_identitas,
                        "alamat" => $this->alamat,
                        "telepon" => $this->telepon,
                        "no_identitas" => $this->no_identitas,
                        "foto_penerima" => $penerimafoto,
                        "foto_ktp" => $ktp,

                    ]
                );
                $path = $this->photo->store('aksi', 'public');
                $data = Beraksi::create([
                    "judul" => $this->judul,
                    "keterangan" => $this->keterangan,
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
                $data->penerimaDonasi()->create([
                    "penerima_id" => $penerima->id,
                    "target_donasi" => $this->target_donasi,
                    "target_waktu" => $this->target_waktu,
                    "donasi_st" => "DONASI_ST_00",
                    "donasi_tercapai" => 0

                ]);


                $this->tampilModal();

                return redirect()->to('aksi')->with('store', 'oke');

            });

        } else {
            $this->validate(
                [
                    "photo" => "required|image|max:1024",
                    "judul" => "required",
                    "kategori" => "required",
                    "deskripsi" => "required",
                    "keterangan" => "required",
                ]
            );

            $path = $this->photo->store('aksi', 'public');
            $data = Beraksi::create([
                "judul" => $this->judul,
                "keterangan" => $this->keterangan,
                "kategori" => $this->kategori,
                "deskripsi" => $this->deskripsi,
                "setuju" => true,
                "creator_id" => auth()->user()->id,
                "publish_st" => 'PUBLISH_ST_01',
                "publish_at" => now(),

            ]);
            $data->sampul()->create(
                [
                    "url" => $path
                ]
            );
            $this->tampilModal();

            return redirect()->to('web-list-aksi')->with('store', 'oke');
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
        $data = ComRegion::where('region_root', $this->region_prop)->get();
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
        $this->region_kel = $data->first()->region_cd ?? "";
    }

    public function update($id)
    {
        if ($this->denganPenerima) {
            $this->validate
            ([
                    "nama" => "required",
                    "alamat" => "required",
                    "region_prop" => "required",
                    "region_kab" => "required",
                    "region_kec" => "required",
                    "region_kel" => "required",
                    "alamat" => "required",
                    "telepon" => "required",
                    "no_identitas" => "required",
                    "foto_ktp" => "max:4096",
                    "foto_penerima" => "max:4096",
                    "judul" => "required",
                    "keterangan" => "required",
                    "kategori" => "required",
                    "deskripsi" => "required",
                    "target_donasi" => "required",
                    "target_waktu" => "required|date",
                ]);

            $penerima = AksiPenerima::where('aksi_id', $id)->first()->penerima_id;
            if ($this->foto_ktp || $this->foto_penerima) {
                $ktp = $this->foto_ktp->store('aksi/identitas/', 'public');
                $penerimafoto = $this->foto_penerima->store('aksi/penerima', 'public');
                Penerima::find($penerima)
                    ->update([
                        "foto_penerima" => $penerimafoto,
                        "foto_ktp" => $ktp,
                    ]);
            }

            Penerima::find($penerima)
                ->update([
                    "nama" => $this->nama,
                    "alamat" => $this->alamat,
                    "region_prop" => $this->region_prop,
                    "region_kab" => $this->region_kab,
                    "region_kec" => $this->region_kec,
                    "region_kel" => $this->region_kel,
                    "kode_identitas" => $this->kode_identitas,
                    "alamat" => $this->alamat,
                    "telepon" => $this->telepon,
                    "no_identitas" => $this->no_identitas,
                ]);

            if ($this->photo) {
                $path = $this->photo->store('aksi', 'public');
            }

            Beraksi::find($id)
                ->update([
                    "judul" => $this->judul,
                    "keterangan" => $this->keterangan,
                    "kategori" => $this->kategori,
                    "deskripsi" => $this->deskripsi,
                    "setuju" => true,
                    "creator_id" => auth()->user()->id,
                ]);

            if ($this->photo) {
                AksiPhoto::where('aksi_id', $id)
                    ->update([
                        "url" => $path
                    ]);
            }

            AksiPenerima::where('aksi_id', $id)
                ->update([
                    "target_donasi" => $this->target_donasi,
                    "target_waktu" => $this->target_waktu,
                    "donasi_st" => "DONASI_ST_00",
                    "donasi_tercapai" => 0
                ]);

            return redirect()->to('postingku')->with('update', 'oke');


        } else {
            $this->validate(
                [
                    "photo" => "max:4096",
                    "judul" => "required",
                    "keterangan" => "required",
                    "kategori" => "required",
                    "deskripsi" => "required",
                ]
            );

            if ($this->photo) {
                $path = $this->photo->store('aksi', 'public');
            }

            Beraksi::find($id)
                ->update([
                    "judul" => $this->judul,
                    "keterangan" => $this->keterangan,
                    "kategori" => $this->kategori,
                    "deskripsi" => $this->deskripsi,
                    "setuju" => true,
                    "creator_id" => auth()->user()->id,

                ]);

            if ($this->photo) {
                AksiPhoto::where('aksi_id', $id)
                    ->update([
                        "url" => $path
                    ]);
            }

            return redirect()->to('postingku')->with('update', 'oke');
        }

    }
}