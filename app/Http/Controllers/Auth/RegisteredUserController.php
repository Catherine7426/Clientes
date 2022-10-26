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


class RegisteredUserController extends Controller
{
    
    public function store(Request $request)
    {

        
        $request->validate([
            'name'=>['required','string','max:255'],
            // 'cliente'=>['required'],
            'email'=>['required','string','email','unique:users'],
            'password'=>['required','string','min:6','confirmed',Rules\Password::defaults()]
        ]);//confirmed valida password_confirmation si es igual

        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            // 'cliente'=>$request->client_id,
            'password'=>bcrypt( $request->password),
        ]);

        Mail::send('emails.confirmacion_codigo', $user, function($message) use($request){
            $message->to ($request['email'])->subject('Por favor confirma tu correo ');
        });


        event(new Registered($user));

        // return to_route('login')->with('status','Account created');
        return to_route('verification.notice');

    }

   
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
