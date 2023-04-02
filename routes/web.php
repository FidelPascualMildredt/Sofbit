<?php

use App\Http\Controllers\MedicoController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/consulta',[MedicoController::class, 'index'])->name('consulta');

Route::get('/js_paciente_info', [MedicoController::class, 'js_paciente'])->name('pacientes.show');

Route::get('/defecto-contenedor-info', function () {
    return view('parts.contenedor_info');
});

