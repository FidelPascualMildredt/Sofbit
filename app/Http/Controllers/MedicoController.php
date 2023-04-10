<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicoController extends Controller
{
    public function index(){
        $pacientes = User::whereHas('rol', function($query){
            $query->where('Paciente',true);
        })->get();

        // $pacientes = User::all();

        return view('consulta',compact('pacientes'));

    }
    public function js_paciente(Request $request) {
        $paciente = User::find($request->get('paciente_id'));
        return view('parts.contenedor_paciente', compact('paciente'));
    }
}




