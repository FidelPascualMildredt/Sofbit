<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use App\Models\Consult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consults = Consult::all();
        return view('consults.index', compact('consults'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $medicos = User::whereHas('rol', function($query){
            $query->where('Medico',true);
        })->get();


        $pacientes = User::whereHas('rol', function($query){
            $query->where('Paciente',true);
        })->get();
        // dd($pacientes);
    return view('consults.create', compact('medicos','pacientes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Consult::create([
         'medico_id' => $request->get('medico'),
         'paciente_id' => $request->get('paciente'),
         'date' => $request->get('appointment_date'),
         'description' => $request->get('descripcion'),
         'height' => $request->get('height'),
         'temperature' => $request->get('temperature'),
        'weight' => $request->get('weight'),
         'pressure' => $request->get('pressure')
           ]);
        //    return ('El Usuario se ha actualizado correctamente');
           return ('El Usuario se a creado correctamente');


        //
        //    $consult->height = $request->height;
        //    $consult->temperature = $request->temperature;
        //    $consult->weight = $request->weight;
        //    $consult->pressure = $request->pressure;
        //    $consult->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consults = Consult::find($id);
        return view('consults.show', compact('consults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    $consult = Consult::findOrFail($id);
    $medicos = User::whereHas('rol', function($query){
        $query->where('Medico',true);
    })->get();

    $pacientes = User::whereHas('rol', function($query){
        $query->where('Paciente',true);
    })->get();

    return view('consults.edit', compact('consult', 'medicos', 'pacientes'));



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
        $consult = Consult::find($id);
        $consult->update([
            'medico_id' => $request->get('medico_id'),
            'paciente_id' => $request->get('paciente_id'),
            // 'date' => $request->get('appointment_date'),
            'description' => $request->get('descripcion'),
            'height' => $request->get('height'),
            'temperature' => $request->get('temperature'),
           'weight' => $request->get('weight'),
            'pressure' => $request->get('pressure')
        ]);

        return ('La consulta se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consults = Consult::findOrFail($id);
        $consults->delete();
        return ('La consulta se a eliminado');
    }

//     public function script()
// {
//     $consults = DB::table('consults')
//                   ->select(DB::raw('DATE(date) as date'), DB::raw('COUNT(*) as total'))
//                   ->groupBy('date')
//                   ->get();

//     return view('script', compact('consults'));

}
