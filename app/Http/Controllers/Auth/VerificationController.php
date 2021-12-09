<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | Este controlador es responsable de manejar la verificación de correo electrónico para cualquier
    | usuario que se registró recientemente con la aplicación. Los correos electrónicos también pueden
    | se volverá a enviar si el usuario no recibió el mensaje de correo electrónico original.
    |
    */

    use VerifiesEmails;

    /**
     * Dónde redirigir a los usuarios después de la verificación.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Cree una nueva instancia de controlador.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
