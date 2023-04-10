@extends('layouts.appDashboard')
@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Detalle de las Recetas
            </h6>
        </div>
        <div class="card-body">
            <h5 class="card-title">Consulta: {{$prescriptions->consults_id}}</h5>
            <h5 class="card-title">Medicamento: {{$prescriptions->medicament}}</h5>
            <h5 class="card-title">Dosis: {{$prescriptions->quantity}}</h5>
            <h5 class="card-title">Nota de Nacimiento: {{$prescriptions->note}}</h5>
            <h5 class="card-title">Hora: {{$prescriptions->hour}}</h5>
            <h5 class="card-title">Tiempo: {{$prescriptions->time}}</h5>

            <a href="{{ route('prescriptions.index') }}"  class="btn btn-success mt-2">
                Regresar
            </a>
        </div>
    </div>
@endsection
