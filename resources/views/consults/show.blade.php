@extends('layouts.appDashboard')
@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Detalle de Consultas
            </h6>
        </div>
        <div class="card-body">
            <h5 class="card-title">Medico: {{$consults->medico_id}}</h5>
            <h5 class="card-title">Paciente: {{$consults->paciente_id}}</h5>
            <h5 class="card-title">Fecha: {{$consults->date}}</h5>
            <h5 class="card-title">Descripción de consulta: {{$consults->description}}</h5>
            <h5 class="card-title">Altura: {{$consults->height}}</h5>
            <h5 class="card-title">Temperatura: {{$consults->temperature}}</h5>
            <h5 class="card-title">Peso: {{$consults->weight}}</h5>
            <h5 class="card-title">Presión: {{$consults->pressure}}</h5>
            <a href="{{ route('consults.index') }}"  class="btn btn-success mt-2">
                Regresar
            </a>
        </div>
    </div>
@endsection
