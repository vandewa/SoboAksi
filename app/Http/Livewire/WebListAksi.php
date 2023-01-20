<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Collection;
use App\Models\Aksi as Beraksi;



class WebListAksi extends Component
{
    public $item ;
    public $pageNumber = 1;
    public $hasMorePages;
    public $kategori;

    protected $listeners = ['newAksi' => '$refresh'];
    protected $queryString = ['kategori'];

    public function mount()
    {
        $this->item = new Collection();

        $this->loadPosts();
    }
    public function loadPosts()
    {
        $posts = Beraksi::with(['kategorinya', 'penerimaDonasi', 'sampul'])->withCount("dukung")->withCount("komentar")->orderBy("created_at", "desc")->whereDoesntHave('penerimaDonasi');
        if($this->kategori){
            $posts->whereHas('kategorinya', function($a){
                $a->where('id', $this->kategori);
            });
        }
        $posts = $posts->paginate(12, ['*'], 'page', $this->pageNumber);
        // dd($posts->items());


        $this->pageNumber += 1;

        $this->hasMorePages = $posts->hasMorePages();

        $this->item->push(...$posts->items());
    }


    public function render()
    {
        return view('livewire.web-list-aksi', [
            'aksi' => Beraksi::with(['kategorinya'])->where('kategori', $this->kategori)->first(),
            'jumlah' => Beraksi::where('kategori', $this->kategori)->whereDoesntHave('penerimaDonasi')->count(),
        ]);
    }
}
