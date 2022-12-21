<?php

namespace App\Http\Controllers\Api;

use App\Facades\MyResponse;
use App\Http\Controllers\Controller;
use App\Models\Aksi;
use App\Models\AksiPenerima;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\DonasiPayment;
use Xendit\Xendit;

class DonasiPaymentController extends Controller
{
    public function callback(Request $request)
    {
        $cekTransaksi =  DonasiPayment::find((int)$request['external_id']);
        if($cekTransaksi->payment_status == "PENDING"){
            return MyResponse::type("success")->info("transaksi sudah dibauar sebelumnya")->response();
        }
        $data =  DonasiPayment::find((int)$request['external_id'])
            ->update(
                [
                    'xendit_transaction_id' => $request['id'],
                    'channel_code' => $request['channel_code'],
                    'payment_status' => $request['status'],
                    'bank_code' => $request['bank_code']
                ]
            );

        if($request['status'] == 'PAID'){
            $donasi  =  DonasiPayment::find((int)$request['external_id']);
            $a =  AksiPenerima::where('aksi_id', $donasi->aksi_id)->first();
            $a->donasi_tercapai =  $a->donasi_tercapai + $request['paid_amount'];
            $a->save();
        }

        $data =  AksiPenerima::where('aksi_id',  $donasi->aksi_id)->first();
        if($data->target_donasi <= $data->donasi_tercapai) {
            $data->donasi_st = "DONASI_ST_01"; // TRUE
            $data->save();
        }
        return MyResponse::type("success")->info("berhasil update transaksi")->response();
    }
    public function ewallet(Request $request)
    {
        $cekTransaksi =  DonasiPayment::find((int)$request['external_id']);
        if($cekTransaksi->payment_status == "PENDING"){
            return MyResponse::type("success")->info("transaksi sudah dibauar sebelumnya")->response();
        }
        $data =  DonasiPayment::find((int)$request['external_id'])
        ->update(
            [
                'xendit_transaction_id' => $request['id'],
                'channel_code' => $request['channel_code'],
                'payment_status' => $request['status'],
                'bank_code' => $request['bank_code']
            ]
        );

            if($request['status'] == 'PAID'){
                $donasi  =  DonasiPayment::find((int)$request['external_id']);
                $a =  AksiPenerima::where('aksi_id', $donasi->aksi_id)->first();
                $a->donasi_tercapai =  $a->donasi_tercapai + $request['paid_amount'];
                $a->save();
            }

            $data =  AksiPenerima::where('aksi_id',  $donasi->aksi_id)->first();
            if($data->target_donasi <= $data->donasi_tercapai) {
                $data->donasi_st = true;
                $data->save();
            }
            return MyResponse::type("success")->info("berhasil update transaksi")->response();

    }
    public function store(Request $request)
    {
        $data = DonasiPayment::create(
            [
                'aksi_id' => $request->aksi_id,
                'aksi_penerima_id' => $request->aksi_penerima_id,
                'payment' => $request->payment,
                'request_payment' => now(),
                'payment_status' => 'PENDING',
                'payment_type' => "",
                'payment_user_id' => auth('api')->user()->id,
            ]
        );
        $aksi = Aksi::find($request->aksi_id);

        Xendit::setApiKey(config('app.xendit_token'));
        $user = auth('api')->user();

        $params = [
            'external_id' => "$data->id",
            'amount' => $request->payment,
            'description' => 'Donasi Sobo Aksi #'.str_pad($data->id,5,"0",STR_PAD_LEFT),
            'invoice_duration' => 86400,
            'customer' => [
                'given_names' => $user->name,
                'surname' => $user->name,
                'email' => $user->email,
                'mobile_number' => "$user->nomor_hp",
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
            'success_redirect_url' => 'http//soboaksi.test',
            'failure_redirect_url' => 'http//soboaksi.test',
            'currency' => 'IDR',
            'fees' => [
                [
                    'type' => 'OPERASIONAL (5%)',
                    'value' => $request->payment / 100*5
                ]
            ]
        ];

        $createInvoice = \Xendit\Invoice::create($params);

        $data->update([
            "url_payment" => $createInvoice['invoice_url']
        ]);

        return $createInvoice;
    }

    public function invoice(Request $request)
    {

    }
}
