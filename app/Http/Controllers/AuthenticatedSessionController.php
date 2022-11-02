<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;




class AuthenticatedSessionController extends Controller
{

    public function acceder (){
        if(Auth::check()){
            return redirect('/home');
        }
        return view ('auth.login');
    }

    public function autenticar(Request $request)

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

   

    public function salir(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login')->with('estado','Has cerrado sesion');


    }

    //Muestro el formulario para introducir el email
    // public function email()
    // {
    //     return view('auth.email');
    // }

    // //Genero y envío el enlace para restaurar la clave
    // public function enlace(Request $request)
    // {
    //     //Validación de email
    //     $request->validate([
    //         'email' => 'required|email|exists:users',
    //     ]);

    //     //Generación de token y almacenado en la tabla password_resets
    //     $token = Str::random(64);
    //     DB::table('password_resets')->insert([
    //         'email' => $request->email,
    //         'token' => $token,
    //         'created_at' => Carbon::now()
    //     ]);

    //     //Envío de email al usuario
    //     Mail::send('emails.email', ['token' => $token], function($message) use($request){
    //         $message->to($request->email);
    //         $message->subject('Cambiar contraseña en Clientes Laravel');
    //     });

    //     //Retorno
    //     return redirect('acceder')->with('estado','Te hemos enviado un email a <strong>'.$request->email.'</strong> con un enlace para realizar el cambio de contraseña.');

    // }

    // //Muestro el formulario para cambiar la clave
    // public function clave($token)
    // {
    //     return view('auth.clave', ['token' => $token]);
    // }

    // //cambio la clave
    // public function cambiar(Request $request)
    // {
    //     //Valido datos
    //     $request->validate([
    //         'email' => 'required|email|exists:usuarios',
    //         'password' => 'required|min:8|max:16|confirmed',
    //         'password_confirmation' => 'required'
    //     ]);

    //     //Compruebo token válido
    //     $comprobarToken = DB::table('password_resets')->where(['email' => $request->email, 'token' => $request->token])->first();
    //     if(!$comprobarToken){
    //         return back()->withInput()->with('danger','El enlace no es válido');
    //     }

    //     //Actualizo password
    //     User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

    //     //Borro token para que no se pueda volver a usar
    //     DB::table('password_resets')->where(['email'=> $request->email])->delete();

    //     //Retorno
    //     return redirect('login')->with('estado','La contraseña se ha cambiado correctamente.');
    // }



}
