<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Terbilang;
use App\Models\DonasiPayment;
use Xendit\Xendit;
use App\Models\Aksi;

class DonateForm extends Component
{
    public $modal;
    public $idnya;
    public $amount;
    public $terbilang;
    public $penerimaId;

    protected $listeners = ["tampilModal", "tutupModal"];

    public function updated()
    {
       $this->terbilang();
    }

    public function tampilModal($id)
    {
        $this->modal = !$this->modal;
        $this->idnya = $id;
        $aksi = Aksi::with(['penerimaDonasi'])->find($id);
        $this->penerimaId = $aksi->penerimaDonasi->id;
    }
    public function tutupModal()
    {
        $this->modal = !$this->modal;
    }
    public function render()
    {
        return view('livewire.donate-form');
    }

    public function tambahDonasi($id)
    {
        $this->amount = $id;
        $this->terbilang();
    }

    public function terbilang()
    {
        if($this->amount ){
            $this->terbilang = Terbilang::make($this->amount).' Rupiah';
        } else {
            $this->terbilang = Terbilang::make($this->amount);
        }
    }

    public function simpanDonasi()
    {
        $data = DonasiPayment::create(
            [
                'aksi_id' =>  $this->idnya,
                'aksi_penerima_id' => $this->penerimaId,
                'payment' => $this->amount,
                'request_payment' => now(),
                'payment_status' => 'PENDING',
                'payment_type' => "",
                'payment_user_id' => auth()->user()->id,
            ]
        );
        $aksi = Aksi::find($this->idnya);

        Xendit::setApiKey(config('app.xendit_token'));
        $user = auth()->user();

        $params = [
            'external_id' => "$data->id",
            'amount' => $this->amount,
            'description' => 'Donasi Sobo Aksi #'.str_pad($data->id,5,"0",STR_PAD_LEFT),
            'invoice_duration' => 86400,
            'customer' => [
                'given_names' => $user->name,
                'surname' => $user->name,
                'email' => $user->email,
                'mobile_number' => "$user->nomor_hp??",
            ],
            'customer_notification_preference' => [
                'invoice_created' => [
                    'whatsapp',
                    'email',
                ],
                'invoice_reminder' => [
                    'whatsapp',
                    'email',
                ],
                'invoice_paid' => [
                    'whatsapp',
                    'email',
                ],
                'invoice_expired' => [
                    'whatsapp',
                    'email',
                ]
            ],
            'success_redirect_url' => url('/'),
            'failure_redirect_url' => 'http//soboaksi.test',
            'currency' => 'IDR',
            'fees' => [
                [
                    'type' => 'OPERASIONAL (5%)',
                    'value' => $this->amount / 100*5
                ]
            ]
        ];

        $createInvoice = \Xendit\Invoice::create($params);

        $data->update([
            "url_payment" => $createInvoice['invoice_url']
        ]);
        return redirect()->to($createInvoice['invoice_url']);

    }
}
