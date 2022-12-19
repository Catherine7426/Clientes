<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::view('/','home')-> middleware(['auth', 'verified'])-> name('home');

// Route::middleware(['auth:sanctum','verified'])->get('/home',function() {
//     return view('home');
// })->name('home');

// Route::get('/email/verify', function () {
//     return view('home');
// })->middleware('auth')->name('verification.notice');



// CLIENTES
Route::middleware(['auth', 'verified'])->group(function () {
Route::get('/clientes',[ClientController::class,'index'])->name('clientes.index');
Route::get('/clientes/create',[ClientController::class,'create'])->name('clientes.create');//Ruta para formulario
Route::post('/clientes',[ClientController::class,'store'])->name('clientes.store');//Ruta para enviar datos a la BD
Route::get('/clientes/{client}',[ClientController::class,'show'])->name('clientes.show');  
Route::get('/clientes/{client}/edit',[ClientController::class,'edit'])->name('clientes.edit');
Route::patch('/clientes/{client}',[ClientController::class,'update'])->name('clientes.update');
Route::delete('/clientes/{client}',[ClientController::class,'destroy'])->name('clientes.destroy');
});

// USUARIOS
// Route::get('/usuarios',[UserController::class])->name('users');

// Route::get('users', [UserController::class, 'index'])/*->middleware('can:users.index')*/->name('users.index');
// Route::get('users/create', [UserController::class, 'create'])->name('users.create');
// Route::post('users', [UserController::class, 'store'])->name('users.store');
// Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
// Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
// Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
// Route::delete('users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy');





//CIUDADES
Route::middleware(['auth', 'verified'])->group(function () {
Route::get('/ciudades',[CityController::class,'index'])->name('ciudades.index');
Route::get('/ciudades/create',[CityController::class,'create'])->name('ciudades.create');
Route::post('/ciudades',[CityController::class,'store'])->name('ciudades.store');
Route::get('/ciudades/{city}',[CityController::class,'show'])->name('ciudades.show');
Route::get('/ciudades/{city}/edit',[CityController::class,'edit'])->name('ciudades.edit');
Route::patch('/ciudades/{city}',[CityController::class,'update'])->name('ciudades.update');
Route::delete('/ciudades/{city}',[CityController::class,'destroy'])->name('ciudades.destroy');
});


// //LOGIN

 Route::get('/login',[AuthenticatedSessionController::class,'acceder'])->name('login');
 Route::post('/login',[AuthenticatedSessionController::class,'autenticar']);
 Route::post('/salir',[AuthenticatedSessionController::class,'salir'])->name('salir');



// //REGISTRO


Route::get('/registro',[RegisteredUserController::class,'registro'])->name('registro');
Route::post('/registro',[RegisteredUserController::class,'registrarse']);  


// E-mail verification
//Route::get('/register/verify/{code}', [RegisteredUserController::class,'verify']);

//EMAIL CAMBIO DE CONTRASEÑA

Route::get('email', [AuthenticatedSessionController::class, 'email'])->name('email');
Route::post('enlace', [AuthenticatedSessionController::class, 'enlace'])->name('enlace');
Route::get('clave/{token}', [AuthenticatedSessionController::class, 'clave'])->name('clave');
Route::post('cambiar', [AuthenticatedSessionController::class, 'cambiar'])->name('cambiar');

// EMAIL CONTACTO
Route::get('/contacto',[RegisteredUserController::class,'index'])->name('contacto.index');
Route::post('/contacto',[RegisteredUserController::class,'contacto'])->name('contactanos');

//RUTA PARA EMAILS
//  Route::get('contactanos', function () {
//      $correo = new ContactanosMailable;
//     Mail::to('catherinegiraldo7426@gmail.com')->send($correo);

//     return "Mensaje Enviado";
//  })->name('contactanos.index');

// Route::get('contactanos', function () {
//     $correo = new ContactanosMailable ("Juan");
//     Mail::to('catherinegiraldo7426@gmail.com')->send($correo);

//     return "Mensaje Enviado";
 
// }) ->name('contactanos.index');
Route::middleware('auth')->group(function () {
 
// AVISO DE VERIFICACION DE CORREO ELECTRONICO
 Route::get('verify-email', [RegisteredUserController::class,'verification'])->name('verification.notice');
    

//CONTROLADOR DE VERIFICACION DE CORREO ELECTRONICO
 Route::get('verify-email/{id}/{hash}',[RegisteredUserController::class,'control']) ->middleware( 'signed')->name('verification.verify');

});




