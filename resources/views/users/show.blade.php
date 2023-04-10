@extends('layouts.appDashboard')
@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Detalle de Usuarios
            </h6>
        </div>
        <div class="card-body">
            <h5 class="card-title">Nombre: {{$users->name}}</h5>
            <h5 class="card-title">Apellido: {{$users->lastname}}</h5>
            <h5 class="card-title">Nickname: {{$users->nickname}}</h5>
            <h5 class="card-title">Fecha de Nacimiento: {{$users->birthdate}}</h5>
            <h5 class="card-title">Sexo: {{$users->gender == 'F' ? 'Femenino' : 'Masculino'}}</h5>
            <h5 class="card-title">Rol: {{$users->role_id == 1 ? 'Administrador' : ($users->role_id == 2 ? 'Medico' : 'Paciente')}}</h5>
            <h5 class="card-title">Email: {{$users->email}}</h5>
            <h5 class="card-title">Contraseña: {{$users->password}}</h5>
            <a href="{{ route('users.index') }}"  class="btn btn-success mt-2">
                Regresar
            </a>
        </div>
    </div>
@endsection
