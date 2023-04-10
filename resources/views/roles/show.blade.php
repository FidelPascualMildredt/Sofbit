@extends('layouts.appDashboard')
@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Detalle de Roles
            </h6>
        </div>
        <div class="card-body">
            <h5 class="card-title">Administrador: {{$roles->Administrator}}</h5>
            <a href="{{ route('roles.index') }}"  class="btn btn-success mt-2">
                Regresar
            </a>
        </div>
    </div>
@endsection
