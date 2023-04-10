@extends('layouts.appDashboard')
@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Roles</h1>
    {{--  <a href="{{ route('roles.create') }}" title="Agregar nueva Rol" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus"></i>
        Agregar
    </a>  --}}
</div>
<x-table titulo="Lista de Roles">
    <x-slot name='encabezado'>
        <th>#
        </th>
        <th>Administador</th>
        <th>Medico</th>
        <th>Paciente</th>
        {{--  <th>Opciones</th>  --}}
    </x-slot>
    <x-slot name='cuerpo'>
        @foreach ($roles as $rol)
            <tr>
                <td>{{ $rol->id }}</td>
                <td>{{ $rol->Administrador }}</td>
                <td>{{ $rol->Medico }}</td>
                <td>{{ $rol->Paciente }}</td>

                {{--  <td>


                    <a href="{{ route('roles.edit', ['role'=> $rol->id]) }}" class="btn btn-success btn-circle btn-sm" title="Editar Rol">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="{{ route('roles.show', ['role'=> $rol->id]) }}" class="btn btn-info btn-circle btn-sm" title="Ver Rol">
                        <i class="fas fa-eye"></i>
                    </a>
                    <form action=" roles/{{$rol->id}}" method="POST">
                        @csrf
                         @method("delete")
                                 <button  class="btn btn-danger btn-circle btn-sm" title="Eliminar Rol">
                              <i class="fas fa-trash"></i></button>
                        </form>

                </td>  --}}
            </tr>
        @endforeach
    </x-slot>
</x-table>
@endsection
