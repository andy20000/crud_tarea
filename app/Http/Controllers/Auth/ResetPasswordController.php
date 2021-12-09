<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | Este controlador es responsable de manejar las solicitudes de restablecimiento de contraseña
    | y utiliza un rasgo simple para incluir este comportamiento. Eres libre de
    | explore este rasgo y anule cualquier método que desee modificar.
    |
    */

    use ResetsPasswords;

    /**
     * Dónde redirigir a los usuarios después de restablecer su contraseña.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
}
