<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\facades\Auth;

use Illuminate\Validation\ValidationException;









class AuthenticatedSessionController extends Controller
{

    public function show (){
        if(Auth::check()){
            return redirect('/home');
        }
        return view ('auth.login');
    }

    public function store(Request $request)

    {
         $credentials=$request->validate([
             'email'=>['required','string','email'],
             'password'=>['required','string']
         ]);

         

        if (!Auth::attempt ($credentials,$request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email'=>'estas credenciales no coinciden con nuestros registros'
            ]);
        }

       
        $request->session()->regenerate();

        return redirect()->intended()->with('estado','Ya estas conectado');//Metodo intented envia  al ruta Dashboard si estamos logeados sino a login y luego a Dashboard

        

    }

    public function verify($password){


    }

    public function destroy(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login')->with('estado','Has cerrado sesion');


    }


}
