<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Terbilang;

class DonateForm extends Component
{
    public $modal;
    public $idnya;
    public $amount;
    public $terbilang;

    protected $listeners = ["tampilModal"];

    public function tampilModal($id)
    {
        $this->modal = !$this->modal;
        $this->idnya = $id;
    }
    public function render()
    {
        return view('livewire.donate-form');
    }

    public function tambahDonasi($id)
    {
        $this->amount = $this->amount + $id;
        $this->terbilang();
    }

    public function terbilang()
    {
        $this->terbilang = Terbilang::make($this->amount);
    }
}
