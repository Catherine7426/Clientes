<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\Str;







class RegisteredUserController extends Controller
{
    //Muestra la vista de registro
    public function registro()
    {
        return view('auth.register');
    }

    public function registrarse(Request $request)
    {

        $request->validate([
            'name'=>['required','string','max:255'],
            // 'cliente'=>['required'],
            'email'=>['required','string','email','unique:users'],
            'password'=>['required','string','min:6','confirmed',Rules\Password::defaults()]
        ]);//confirmed valida password_confirmation si es igual


        //$confirmation_code= Str::random(25);

        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            // 'cliente'=>$request->client_id,
            'password'=>bcrypt( $request->password),
            'confirmation_code'=> $request->confirmation_code,
        ]);

         event(new Registered($user));
    

        // Mail::send('emails.confirmation_code', ['confirmation_code' => $confirmation_code], function($message) use($request){
        //  $message->to ($request->email,$request->name)->subject('Por favor confirma tu correo ');
        //  });

        // return $user;
        //      //Login de usuario
        // Auth::login($user);

        // Redirección
         //return redirect('login');

        // event(new Registered($user));

        // // return to_route('login')->with('status','Account created');
        //return to_route('verification.notice');

    }

   
    // public function verify($code)
    // {
    //     $user=User::where ('confirmation_code',$code)->first();
        
    //     if (!$user)
    //     {
    //         return redirect('/home');
    //     }

    //     $user->confirmed=true;
    //     $user->confirmation_code=null; // elimina el codigo de confirmacion
    //     $user->save();

    //     return redirect('/login')->with('estado','Has confirmado correctamente tu correo');
    // }

    
}
