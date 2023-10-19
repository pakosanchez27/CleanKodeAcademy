<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Client;
use Google\Service\Drive;
use Illuminate\Support\Facades\Redirect;

class GoogleAuthController extends Controller
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
        $this->client->setAuthConfig(storage_path('Api/client_secret_658488628987-j5af6ui6asacudu6864rnfodlc0pokvv.apps.googleusercontent.com.json'));
        $this->client->setAccessType('offline');
        $this->client->setPrompt('select_account consent');
        $this->client->addScope(Drive::DRIVE);
        
    }

    public function index()
    {
        // Logic to work with Google Drive here
        return view('google.index');
    }
    
    public function redirectToGoogle()
    {
        $authUrl = $this->client->createAuthUrl();
        return Redirect::to($authUrl);
    }
    public function handleGoogleCallback(Request $request)
    {
        $code = $request->get('code');
        $token = $this->client->fetchAccessTokenWithAuthCode($code);
    
        // Now you can save $token and use it to interact with Google Drive
        // $token contains the access and refresh tokens
        // Make sure to store the token securely, as it will be needed for future interactions with the Google Drive API.
    }
}
