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
        // Lógica para trabajar con Google Drive aquí
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

        // Ahora puedes guardar $token y usarlo para interactuar con Google Drive
        // $token contiene el token de acceso y de actualización
        // Asegúrate de almacenar el token de manera segura, ya que será necesario para futuras interacciones con la API de Google Drive.
    }
}
