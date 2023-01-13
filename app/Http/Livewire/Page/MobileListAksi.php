<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\Aksi as Beraksi;
use Illuminate\Support\Collection;

class MobileListAksi extends Component
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
        $posts = Beraksi::with(['kategorinya', 'penerimaDonasi', 'sampul'])->withCount("dukung")->orderBy("created_at", "desc")->whereDoesntHave('penerimaDonasi');
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
        return view('livewire.page.mobile-list-aksi');
    }
}
