<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class controllerAuthGoogle extends Controller
{
    public function index (){
        return Socialite::driver('google')->redirect();
    }
}
