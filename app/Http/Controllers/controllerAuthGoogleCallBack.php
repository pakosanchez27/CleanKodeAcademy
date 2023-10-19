<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class controllerAuthGoogleCallBack extends Controller
{
    public function index(){
        $user = Socialite::driver('google')->user();
        dd($user);
    }
}
