@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Consulta</h5>
                <div class="row mb-3">
                    <div class="col-sm-12 col-md-6">
                        <label for="Paciente" class="col-form-label text-md-end">Paciente</label>
                        <select class="form-control" name="paciente" id="paciente">
                            <option value='0'>Seleccione una opcion</option>
                            @foreach ($pacientes as $paciente)
                                <option value='{{ $paciente->id }}'>{{ $paciente->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div id="contenedor_info">
                    <div class="row" >
                        <div class="col-md-6">
                            <h5 class="card-title placeholder-glow">
                                <span class="placeholder col-6"></span>
                            </h5>

                            <p class="card-text placeholder-glow">
                                <span class="placeholder col-7"></span>
                                <span class="placeholder col-4"></span>
                                <span class="placeholder col-4"></span>
                                <span class="placeholder col-6"></span>
                                <span class="placeholder col-8"></span>
                            </p>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="peso" class="form-label">Peso</label>
                                    <input type="text" class="form-control" id="peso" disabled>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="altura" class="form-label">Altura</label>
                                    <input type="text" class="form-control" id="altura" disabled>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="presion" class="form-label">Presión</label>
                                    <input type="text" class="form-control" id="presion" disabled>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="temperatura" class="form-label">Temperatura</label>
                                    <input type="text" class="form-control" id="temperatura" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $("#paciente").on('change', function() {
                var paciente_id = $(this).find(":selected").val();
                console.log('cambio: ' + paciente_id);
                if (paciente_id == 0) {
                    $("#contenedor_info").load('defecto-contenedor-info'); // Limpia la información del paciente
                } else {
                    $("#contenedor_info").load('js_paciente_info?paciente_id=' + paciente_id);
                }
            });


        });
    </script>

@endpush
