<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\Autenticacion;
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

Route::get('/', function () {
    return view('inicio');
});

Route::get('/login', function(){
    return view('login');
});
Route::get('/publico', function(){
    return view('publico');
});

Route::get('/privado', function(){
    return view('privado');
})->middleware(Autenticacion::class);

Route::post('/login', [LoginController::class,'Login']);
Route::get('/logout', [LoginController::class,'Logout']);