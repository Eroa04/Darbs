<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class SesionController extends Controller
{
    //
    public function login(Request $request){

        $user = User::where('Correo', $request->email)->first();

        if($user->Contrasena === ($request->password)){
            Auth::login($user);
            $request->session()->regenerate();

            return redirect('usuarios');
        }
        throw ValidationValidationException::withMessages([
            'email' => 'Correo no coincide',
            'password' => 'Contraseña no coincide'
        ]);

 /*     $credentials = $request->validate
    ([
        'email' => ['required','email'],
        'password' => ['required']
    ]);
    if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect('usuarios');
    }
    throw ValidationValidationException::withMessages([
        'email' => 'Correo no encontrado',
        'password' => 'Contraseña incorrecta'
    ]);
*/
    }

    public function logout(Request $request, Redirector $redirect){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $redirect->to('inicio');

    }
}
