@extends('layouts.appDashboard')
@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Usuarios</h1>
    <a href="{{ route('users.create') }}" title="Agregar nuevo Usuario" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus"></i>
        Agregar
    </a>
</div>
<x-table titulo="Lista de Usuarios">
    <x-slot name='encabezado'>
        <th>#
        </th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Nickname</th>
        <th>Fecha de Nacimiento</th>
        <th>Sexo</th>
        <th>Rol</th>
        <th>Email</th>
        <th>Contraseña</th>
        <th>Opciones</th>
    </x-slot>
    <x-slot name='cuerpo'>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->nickname }}</td>
                <td>{{ $user->birthdate }}</td>
                <td>{{ $user->gender == 'F' ? 'Femenino' : 'Masculino' }} </td>
                <td>{{ $user->role_id == 1 ? 'Administrador' : ($user->role_id == 2 ? 'Medico' : 'Paciente')}}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>
                    <a href="{{ route('users.edit', ['user'=> $user->id]) }}" class="btn btn-success btn-circle btn-sm" title="Editar Usuario">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="{{ route('users.show', ['user'=> $user->id]) }}" class="btn btn-info btn-circle btn-sm" title="Ver Usuario">
                        <i class="fas fa-eye"></i>
                    </a>
                    <form action=" users/{{$user->id}}" method="POST">
                        @csrf
                         @method("delete")
                                 <button  class="btn btn-danger btn-circle btn-sm" title="Eliminar Usuario">
                              <i class="fas fa-trash"></i></button>
                        </form>

                </td>
            </tr>
        @endforeach
    </x-slot>
</x-table>
@endsection
