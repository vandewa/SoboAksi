<?php

namespace App\Http\Livewire\Page;

use App\Models\DonasiPayment;
use Livewire\Component;

class MobileDonasiku extends Component
{
    public function render()
    {
        $data = DonasiPayment::with(['aksi', 'penerimaDonasi'])->where('payment_user_id', auth()->user()->id)->paginate(20);

        // dd( $data);

    return view('livewire.page.mobile-donasiku', [
            'data' => $data,
            'jumlah' => DonasiPayment::with(['aksi'])
            ->where('payment_user_id', auth()->user()->id)
            ->where('payment_status','PAID')
            ->count(),
            
        ]);
    }
    
}
