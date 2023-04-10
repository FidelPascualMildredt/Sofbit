<?php

namespace App\Http\Controllers;

use App\Models\Consult;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescriptions= Prescription::all();
        return view('prescriptions.index', compact('prescriptions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consults = Consult::pluck('id');
        return view('prescriptions.create', compact('consults'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Prescription::create([
            'consults_id' => $request->get('consult'),
         'medicament' => $request->get('medicament'),
         'quantity' => $request->get('quantity'),
         'note' => $request->get('note'),
         'hour' => $request->get('hour'),
         'time' => $request->get('time'),


           ]);
        //    return ('El Usuario se ha actualizado correctamente');
           return ('La receta se a creado correctamente');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prescriptions = Prescription::find($id);
        return view('prescriptions.show', compact('prescriptions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    $prescription = Prescription::findOrFail($id);
    $consults = Consult::pluck('id');
    return view('prescriptions.edit', compact('prescription', 'consults'));


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
        $prescription = Prescription::find($id);
        $prescription->update([
            // 'consults_id' => $request->get('consult'),
            'medicament' => $request->get('medicament'),
            'quantity' => $request->get('quantity'),
            'note' => $request->get('note'),
            'hour' => $request->get('hour'),
            'time' => $request->get('time'),
        ]);

        return ('La receta se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prescriptions = Prescription::findOrFail($id);
        $prescriptions->delete();
        return ('El usuario se a eliminado');
    }

    // }
public function save(Request $request){
    $prescription = $request->all();
    // dd($prescription['medicamentos']);

    $consulta = Consult::create([
        'medico_id' => Auth::user()->id,
        'paciente_id' => $prescription['paciente_id'],
        'date' => now(),
        'description' => $prescription['descripcion'],
        'height' => 12.3,
        'temperature' => 23.63,
        'weight' => 45.2,
        'pressure' => 12.2
    ]);

    foreach($prescription['medicamentos'] as $medicamento){
        Prescription::create([
            'consults_id' => $consulta->id,
            'medicament' => $medicamento[0],
            'quantity' => $medicamento[1],
            'hour' => $medicamento[2],
            'time' => $medicamento[3],
            'note' => $medicamento[4]
        ]);
    }

    return response()->json(['success' => 'Datos guardados!']);
}

}
