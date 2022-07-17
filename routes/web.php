<?php

use App\Http\Controllers\TurnoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {return view('Welcome');})->name('welcome');

Route::view('/sing', 'Registro') -> name('registro');

Route::get('/loginus', function () {return view('login_regular');})->name('login.usuario');

Route::post('usuario.verificar',[UsuarioController::class,'verify'])->name('usuarios.verificar');

Route::post('admin.verificar',[UsuarioController::class,'verifyadm'])->name('admin.verificar');

Route::get('/usuarios.home', function () {return view('home_user');})->name('usuarios.home');

Route::get('/administrador.home', function () {return view('Home_Adm');})->name('administrador.home');

Route::get('full-calender', [TurnoController::class, 'index']);

Route::post('full-calender/action', [TurnoController::class, 'action']);

Route::get('/usuarios.editar',[UsuarioController::class,'edit'])->name('usuarios.editar');

Route::put('/usuarios.actualizar',[UsuarioController::class,'update'])->name('usuarios.actualizar');

Route::get('/usuarios.ver',[UsuarioController::class,'indexu'])->name('usuarios.ver');










Route::get('/loginadm', function () {return view('login_Adm');})->name('login.admin');

Route::get('usuarios.index', [UsuarioController::class,'index'])->name('usuarios.index');

Route::post('/usuarios', [UsuarioController::class,'store'])->name('usuarios.crear');
