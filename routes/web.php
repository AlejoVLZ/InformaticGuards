<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
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

Route::get('/', function () {return view('Welcomea');});

Route::get('/homea', function () {return view('Home_Adm');});

Route::get('/homeus', function () {return view('home_user');});

Route::view('/sing', 'Registro') -> name('registro');

Route::post('registro', [UsuarioController::class, 'store']) ->name('registrar');




Route::get('/loginus', function () {return view('login_regular');});

Route::get('/loginadm', function () {return view('login_Adm');});

Route::get('/usinfo', function () {return view('users-info');});

Route::get('/usuarios', [UsuarioController::class,'index']);

Route::post('/usuarios/crear', [UsuarioController::class,'store']);
