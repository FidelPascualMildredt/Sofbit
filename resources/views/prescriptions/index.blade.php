@extends('layouts.appDashboard')
@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Receta</h1>
    <a href="{{ route('prescriptions.create') }}" title="Agregar nueva Receta" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus"></i>
        Agregar
    </a>
</div>
<x-table titulo="Lista de Recetas">
    <x-slot name='encabezado'>
        <th>#
        </th>
        <th>Consulta</th>
        <th>Medicamento</th>
        <th>Dosis</th>
        <th>Hora</th>
        <th>Tiempo</th>
        <th>Opciones</th>
    </x-slot>
    <x-slot name='cuerpo'>
        @foreach ($prescriptions as $prescription)
            <tr>
                <td>{{ $prescription->id }}</td>
                <td>{{ $prescription->consults_id }}</td>
                <td>{{ $prescription->medicament}}</td>
                <td>{{ $prescription->quantity }}</td>
                <td>{{ $prescription->hour }}</td>
                <td>{{ $prescription->time}}</td>
                <td>
                    <a href="{{ route('prescriptions.edit', ['prescription'=> $prescription->id]) }}" class="btn btn-success btn-circle btn-sm" title="Editar Receta">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="{{ route('prescriptions.show', ['prescription'=> $prescription->id]) }}" class="btn btn-info btn-circle btn-sm" title="Ver Receta">
                        <i class="fas fa-eye"></i>
                    </a>
                    <form action=" prescription/{{$prescription->id}}" method="POST">
                        @csrf
                         @method("delete")
                                 <button  class="btn btn-danger btn-circle btn-sm" title="Eliminar Receta">
                              <i class="fas fa-trash"></i></button>
                        </form>

                </td>
            </tr>
        @endforeach
    </x-slot>
</x-table>
@endsection
