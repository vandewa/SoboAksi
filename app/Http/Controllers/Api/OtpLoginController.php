<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendCodeResetPassword;
use App\Mail\SendOtpLogin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class OtpLoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $otp = mt_rand(100000, 999999);
        Log::info("otp = " . $otp);
        $user = User::where('email', $request->email)->update(['otp' => $otp]);
        if ($user) {

            // $mail_details = [
            //     'subject' => 'Testing Application OTP',
            //     'body' => 'Your OTP is : ' . $otp
            // ];

            Mail::to($request->email)->send(new SendOtpLogin($otp));

            return response(["status" => 200, "message" => "OTP sent successfully"]);
        } else {
            return response(["status" => 401, 'message' => 'Invalid']);
        }
    }
}
