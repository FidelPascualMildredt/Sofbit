@extends('layouts.appDashboard')
@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Consultas</h1>
    <a href="{{ route('consults.create') }}" title="Agregar nueva Consulta" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus"></i>
        Agregar
    </a>
</div>
<x-table titulo="Lista de Consultas">
    <x-slot name='encabezado'>
        <th>#
        </th>
        <th>Medico</th>
        <th>Paciente</th>
        <th>Fecha</th>
        <th>Descripción de consulta</th>
        <th>Altura</th>
        <th>Temperatura</th>
        <th>Peso</th>
        <th>Presión</th>
        <th>Opciones</th>
    </x-slot>
    <x-slot name='cuerpo'>
        @foreach ($consults as $consult)
            <tr>
                <td>{{ $consult->id }}</td>
                <td>{{ $consult->medico_id}}</td>
                <td>{{ $consult->paciente_id}}</td>
                <td>{{ $consult->date }}</td>
                <td>{{ $consult->description }}</td>
                <td>{{ $consult->height }}</td>
                <td>{{ $consult->temperature }}</td>
                <td>{{ $consult->weight }}</td>
                <td>{{ $consult->pressure }}</td>
                <td>
                    <a href="{{ route('consults.edit', ['consult'=> $consult->id]) }}" class="btn btn-success btn-circle btn-sm" title="Editar Consulta">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="{{ route('consults.show', ['consult'=> $consult->id]) }}" class="btn btn-info btn-circle btn-sm" title="Ver Consulta">
                        <i class="fas fa-eye"></i>
                    </a>
                    <form action=" consults/{{$consult->id}}" method="POST">
                        @csrf
                         @method("delete")
                                 <button  class="btn btn-danger btn-circle btn-sm" title="Eliminar Consulta">
                              <i class="fas fa-trash"></i></button>
                        </form>

                </td>
            </tr>
        @endforeach
    </x-slot>
</x-table>
@endsection
