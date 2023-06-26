<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {

        $user = Socialite::driver('google')->user();
        
        $finduser = User::where('google_id', $user->getEmail())->first();

        if($finduser){
            Auth::login($finduser);
            return redirect()->intended('home');
        }else{
            $newuser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'google_id' => $user->getId(),
            ]);

            Auth::login($finduser);
            return redirect()->intended('home');

        }

        // try {
        //     $google_user = Socialite::driver('google')->user();
        //     $user = User::where('google_id', $google_user->getId())->first();

        //     if(!$user){
        //         $new_user = User::create([
        //             'name' => $google_user->getName(),
        //             'email' => $google_user->getEmail(),
        //             'google_id' => $google_user->getId(),
        //         ]);

        //         Auth::login($new_user);

        //         return redirect()->route('home');
                
        //     } else {
        //         Auth::login($user);

        //         return redirect()->route('home');
        //     }
        // } catch (\Throwable $th){
        //     dd('Something went wrong!'. $th->getMessage());
        // }
    }
}
