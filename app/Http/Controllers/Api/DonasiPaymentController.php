<?php

namespace App\Http\Controllers\Api;

use App\Facades\MyResponse;
use App\Http\Controllers\Controller;
use App\Models\AksiPenerima;
use Illuminate\Http\Request;
use App\Models\DonasiPayment;
use Xendit\Xendit;

class DonasiPaymentController extends Controller
{
    public function callback(Request $request)
    {

    }
    public function ewallet(Request $request)
    {
        $data =  DonasiPayment::find((int)$request['data']['reference_id'])
        ->update(
            [
                'xendit_transaction_id' => $request['data']['id'],
                'channel_code' => $request['data']['channel_code'],
                'payment_status' => $request['data']['status']
            ]
        );

            if($request['data']['status'] == 'SUCCEEDED'){
                $donasi  =  DonasiPayment::find((int)$request['data']['reference_id']);
                $a =  AksiPenerima::where('aksi_id', $donasi->aksi_id)->first();
                $a->donasi_tercapai =  $a->donasi_tercapai + $request['data']['capture_amount'];
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
                'payment_status' => 'PAYMENT_STATUS_01',
                'payment_type' => $request->payment_type,
                'payment_user_id' => auth('api')->user()->id,
            ]
        );

        Xendit::setApiKey(config('app.xendit_token'));

        // kirim tagihan ke xendit
        $ewalletChargeParams = [
            'reference_id' => "$data->id",
            'currency' => 'IDR',
            'amount' => (int) $request->payment,
            'checkout_method' => 'ONE_TIME_PAYMENT',
            'channel_code' => $request->channel_code,
            'channel_properties' => [
                'success_redirect_url' => url('/'),
            ],
            'metadata' => [
                'branch_code' => 'tree_branch'
            ]
        ];

//        return $ewalletChargeParams;

        $createEWalletCharge = \Xendit\EWallets::createEWalletCharge($ewalletChargeParams);

        return $createEWalletCharge;
    }
}
