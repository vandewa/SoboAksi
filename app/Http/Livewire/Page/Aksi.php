<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\Aksi as Beraksi;
use Illuminate\Support\Collection;

class Aksi extends Component
{
    public $item ;
    public $pageNumber = 1;
    public $hasMorePages;
    public $kategori;

    protected $listeners = ['newAksi' => '$refresh'];

    // public function newAksi($id)
    // {

    //    $a = Beraksi::with(['kategorinya', 'penerimaDonasi'])->withCount("dukung")->find($id);

    //    $this->item->prepend($a);
    // }

    protected $queryString = ['kategori'];

    public function mount()
    {
        $this->item = new Collection();

        $this->loadPosts();
    }
    public function loadPosts()
    {
        $posts = Beraksi::with(['kategorinya', 'penerimaDonasi', 'sampul'])->withCount("dukung")->orderBy("created_at", "desc");
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
        return view('livewire.page.aksi');
    }
}
