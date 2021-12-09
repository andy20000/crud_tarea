<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | Este controlador controla la autenticación de usuarios para la aplicación y
    | redirigiéndolos a su pantalla de inicio. El controlador utiliza un rasgo
    | para proporcionar convenientemente su funcionalidad a sus aplicaciones.
    |
    */

    use AuthenticatesUsers;

    /**
     * Dónde redirigir a los usuarios después de iniciar sesión.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
