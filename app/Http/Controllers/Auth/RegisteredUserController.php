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
use App\Mail\ContactanosMailable;
use App\Jobs\ContactanosJob;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use PhpParser\Node\Stmt\Return_;
use App\Mail\ConfirmationMail;

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
           
        ]);

         event(new Registered($user));

        // foreach (['admin@admin.com ']as $email ) {
        //     Mail::to($email)->send(new ConfirmationMail());
        // }

        Auth::login($user);
        return view('auth.verify-email');

         
        }

       // VERIFICACION DE EMAIL

    public function verification (Request $request)
    {

         if ( $request->user()->hasVerifiedEmail()) {
            return view('auth.verify-email');
         }
        
       
    }

    public function control (EmailVerificationRequest $request)
{
    $request->fulfill();
    return to_route('home')->with('estado','Te has registrado correctamente. Bienvenido');
}
    
       
        // Mail::send('emails.confirmation_code', ['confirmation_code' => $confirmation_code], function($message) use($request){
        //  $message->to ($request->email,$request->name)->subject('Por favor confirma tu correo ');
        //  });

        

   

   
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

    public function index ()
    {
        return view ('contacto.index');
    }

    public function contacto (Request $request)

     {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'mensaje'=>'required',
        ]);
      

        $email = new ContactanosMailable($request->all()) ;
         Mail::to('catherine@gmail.com')->send ($email);
        return redirect ()->route ('contacto.index')->with ('estado','Mensaje enviado') ;
       
       
    }

   
        
        

         
        // $name['email']='fabiola@gmail.com';
        // dispatch(new ContactanosJob($request->all()));
        // return "Mensaje Enviado";

    
     }

    // public function colas(Request $request)
    // {
    //     ContactosJob::dispatch('catherine@gmail.com','emails por colas');
    // }

    

