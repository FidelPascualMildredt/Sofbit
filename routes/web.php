<?php

use App\Http\Controllers\MedicoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolControler;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConsultController;
use App\Http\Controllers\PrescriptionController;
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
    return view('dashboard');
});

Auth::routes();
Route::middleware('auth')->group(function () {

    Route::get('/consulta',[MedicoController::class, 'index'])->name('consulta');
    //Rutas de formulario y login
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/js_paciente_info', [MedicoController::class, 'js_paciente'])->name('pacientes.show');

    Route::get('/defecto-contenedor-info', function () {
        return view('parts.contenedor_info');
    });


    // Rutas de panel administrativo
    Route::resource('roles',RolControler::class);
    Route::resource('users',UserController::class);
    Route::resource('consults',ConsultController::class);
    Route::resource('prescriptions',PrescriptionController::class);

    Route::post('/guardarDatosReceta', [Prescriptioncontroller::class, 'save'])->name('save');

});


