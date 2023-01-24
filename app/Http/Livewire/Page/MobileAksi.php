<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\Aksi;
use App\Models\AksiDukung;
use Illuminate\Support\Facades\Auth;

class MobileAksi extends Component
{
    public $jumlahLike;

    public function render()
    {
        $data = Aksi::with(['sampul', 'penerimaDonasi', 'kategorinya', 'dukung', 'komentar'])->whereDoesntHave('penerimaDonasi')->limit(5)->withCount('dukung')->withCount('komentar')->where('publish_st', 'PUBLISH_ST_01')->orderBy('publish_at', 'desc')->get();

        // dd($data);

        return view('livewire.page.mobile-aksi',[
            "data" => $data
        ]);       
         
    }

    public function like($id)
    {
        if (!Auth::check()) {
            return false;
        }
        $datanya = AksiDukung::where("aksi_id", $id)->where("creator_id", auth()->user()->id??1)->first();
        if($datanya){
            $datanya->delete();
            $this->jumlahLike --;
        }else {
            $a = AksiDukung::create(
                [
                    "aksi_id" => $id,
                    "creator_id" => auth()->user()->id??1
                ]
            );
            $this->jumlahLike ++;
        }
    }
}
