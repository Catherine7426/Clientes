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



Route::view('/','home')-> middleware('auth')-> name('home');

Route::get('/email/verify', function () {
    return view('home');
})->middleware('auth')->name('verification.notice');

// CLIENTES
Route::get('/clientes',[ClientController::class,'index'])->name('clientes.index');
Route::get('/clientes/create',[ClientController::class,'create'])->name('clientes.create');//Ruta para formulario
Route::post('/clientes',[ClientController::class,'store'])->name('clientes.store');//Ruta para enviar datos a la BD
Route::get('/clientes/{client}',[ClientController::class,'show'])->name('clientes.show');  
Route::get('/clientes/{client}/edit',[ClientController::class,'edit'])->name('clientes.edit');
Route::patch('/clientes/{client}',[ClientController::class,'update'])->name('clientes.update');
Route::delete('/clientes/{client}',[ClientController::class,'destroy'])->name('clientes.destroy');

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
Route::get('/ciudades',[CityController::class,'index'])->name('ciudades.index');
Route::get('/ciudades/create',[CityController::class,'create'])->name('ciudades.create');
Route::post('/ciudades',[CityController::class,'store'])->name('ciudades.store');
Route::get('/ciudades/{city}',[CityController::class,'show'])->name('ciudades.show');
Route::get('/ciudades/{city}/edit',[CityController::class,'edit'])->name('ciudades.edit');
Route::patch('/ciudades/{city}',[CityController::class,'update'])->name('ciudades.update');
Route::delete('/ciudades/{city}',[CityController::class,'destroy'])->name('ciudades.destroy');


//LOGIN
Route::view('/login','auth.login')->name('login');
Route::post('/login',[AuthenticatedSessionController::class,'store']);
Route::post('/salir',[AuthenticatedSessionController::class,'destroy'])->name('salir');


//REGISTRO
Route::view('/registro','auth.register')->name('registro');
Route::post('/registro',[RegisteredUserController::class,'store']);


//RUTA PARA EMAILS
Route::get('contactanos', function () {
    $correo = new ContactanosMailable;
    Mail::to('catherinegiraldo7426@gmail.com')->send($correo);

    return "Mensaje Enviado";
})->name('contactanos.index');



