@extends('layouts.appDashboard')
@section('container')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Crear nueva Consulta
        </h6>
    </div>

    <div class="card-body">

        <form action="{{ route('consults.store') }}" method="POST">
            @method('POST')
            @csrf

            <div class="form-group">
                <label for="medico_id">Médico</label>
                <select class="form-control" name="medico" id="medico">
                    <option value='0'>Seleccione una opcion</option>
                    @foreach ($medicos as $medico)
                        <option value='{{ $medico->id }}'>{{ $medico->name }}</option>
                    @endforeach
                </select>
                @error('medico_id')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="Paciente" >Paciente</label>
                <select class="form-control" name="paciente" id="paciente">
                    <option value='0'>Seleccione una opcion</option>
                    @foreach ($pacientes as $paciente)
                        <option value='{{ $paciente->id }}'>{{ $paciente->name }}</option>
                    @endforeach
                </select>
                @error('Paciente')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
            </div>


          <div class="row mb-3">
                    <label for="appointment_date" class="col-md-2 col-form-label text-md-end">Fecha y hora de la cita</label>
                    <div class="col-md-3">
                        <input id="appointment_date" type="datetime-local" class="form-control @error('appointment_date') is-invalid @enderror" name="appointment_date" value="{{ old('appointment_date') }}" required autocomplete="appointment_date" autofocus>

                        @error('appointment_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción de consulta</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="4">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="height">Altura</label>
                    <input type="number" step="0.0001" class="form-control" id="height" name="height" value="{{ old('height') }}" required>
                    @error('height')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="temperature">Temperatura</label>
                    <input type="number" step="0.0001" class="form-control" id="temperature" name="temperature" value="{{ old('temperature') }}" required>
                    @error('temperature')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="weight">Peso</label>
                    <input type="number" step="0.0001" class="form-control" id="weight" name="weight" value="{{ old('weight') }}" required>
                    @error('weight')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pressure">Presión</label>
                    <input type="number" step="0.0001" class="form-control" id="pressure" name="pressure" value="{{ old('pressure') }}" required>
                    @error('pressure')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                {{--  <div class="form-group">
                    <label for="height">Altura</label>
                    <input type="number" class="form-control" id="height" name="height" value="{{ old('height') }}" step="0.01">
                    @error('height')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="temperature">Temperatura</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="temperature" name="temperature" value="{{ old('temperature') }}" step="0.1" aria-describedby="temperature-addon">
                        <div class="input-group-append">
                            <span class="input-group-text" id="temperature-addon">°C</span>
                        </div>
                    </div>
                    @error('temperature')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="weight">Peso</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="weight" name="weight" value="{{ old('weight') }}" step="0.1" aria-describedby="weight-addon">
                        <div class="input-group-append">
                            <span class="input-group-text" id="weight-addon">kg</span>
                        </div>
                    </div>
                    @error('weight')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pressure">Presión arterial</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="pressure" name="pressure" value="{{ old('pressure') }}" step="1" min="0" max="300" aria-describedby="pressure-addon">
                        <div class="input-group-append">
                            <span class="input-group-text" id="pressure-addon">mmHg</span>
                        </div>
                    </div>
                    @error('pressure')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>  --}}

            <button type="submit" class="btn btn-primary mt-2">Guardar</button>
            <a href="{{ route('consults.index') }}"  class="btn btn-success mt-2">
                Regresar
            </a>
        </form>
    </div>
</div>




@endsection
