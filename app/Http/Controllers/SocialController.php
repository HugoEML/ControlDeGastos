<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Illuminate\Support\Facades\Hash;

class SocialController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try{
            $user = Socialite::driver($provider)->user();
            $createUser = User::firstOrCreate([
                'email' => $user->getEmail()
            ], [
                'name' => $user->getName()
            ]);

            auth()->login($createUser);
            return view('home');

        }catch(\GuzzleHttp\Exception\ClientException $e){
            dd($e);
        }
        // $user = Socialite::driver($provider)->user();
        // return view('home');
    }
}
