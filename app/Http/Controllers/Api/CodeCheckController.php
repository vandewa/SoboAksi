<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ResetCodePassword;
use DateTime;

class CodeCheckController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'code' => 'required|string|exists:reset_code_passwords',
        ]);

        // find the code
        $passwordReset = ResetCodePassword::firstWhere('code', $request->code);

        // check if it does not expired: the time is one hour
        $start_date = new DateTime($passwordReset->created_at);
        $since_start = $start_date->diff(new DateTime(now()));
        $minutes = $since_start->days * 24 * 60;
        $minutes += $since_start->h * 60;
        $minutes += $since_start->i;
        if ($minutes < 5) {
            return response([
                'code' => $passwordReset->code,
                'message' => trans('passwords.code_is_valid')
            ], 200);
        }

        $passwordReset->delete();
        return response(['message' => trans('passwords.code_is_expire')], 422);
    }
}
