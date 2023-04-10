@extends('layouts.appDashboard')
@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Editar Consulta
            </h6>
        </div>
        <div class="card-body">


            <form action="{{ route('consults.update', $consult->id) }}" method="POST">
                @method('PUT')
                @csrf


                 <div class="form-group">
                    <label for="medico_id">Médico</label>
                    <select class="form-control" name="medico_id" id="medico">
                        <option value='0'>Seleccione una opcion</option>
                        @foreach ($medicos as $medico)
                            <option value='{{ $medico->id }}' {{ $medico->id == $consult->medico_id ? 'selected' : '' }}>{{ $medico->name }}</option>
                        @endforeach
                    </select>
                    @error('medico_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                  <div class="form-group">
                    <label for="paciente_id" >Paciente</label>
                    <select class="form-control" name="paciente_id" id="paciente">
                        <option value='0'>Seleccione una opcion</option>
                        @foreach ($pacientes as $paciente)
                            <option value='{{ $paciente->id }}' {{ $paciente->id == $consult->paciente_id ? 'selected' : '' }}>{{ $paciente->name }}</option>
                        @endforeach
                    </select>
                    @error('paciente_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                {{--  <div class="row mb-3">
                    <label for="appointment_date" class="col-md-2 col-form-label text-md-end">Fecha y hora de la cita</label>
                    <div class="col-md-3">
                        <input id="appointment_date" type="datetime-local" class="form-control @error('appointment_date') is-invalid @enderror" name="appointment_date" value="{{ $consult->appointment_date->format('Y-m-d\TH:i') }}" required autocomplete="appointment_date" autofocus>

                        @error('appointment_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>  --}}
                <div class="form-group">
                    <label for="descripcion">Descripción de consulta</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="4">{{ $consult->description }}</textarea>
                    @error('descripcion')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="height">Altura</label>
                    <input type="number" step="0.0001" class="form-control" id="height" name="height" value="{{ $consult->height }}" required>
                    @error('height')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="temperature">Temperatura</label>
                    <input type="number" step="0.0001" class="form-control" id="temperature" name="temperature" value="{{ $consult->temperature }}" required>
                    @error('temperature')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="weight">Peso</label>
                    <input type="number" step="0.0001" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight" value="{{ old('weight', $consult->weight) }}" required>
                    @error('weight')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pressure">Presión</label>
                    <input type="number" step="0.0001" class="form-control" id="pressure" name="pressure" value="{{ $consult->pressure }}" required>
                    @error('pressure')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>



                <button type="submit" class="btn btn-primary mt-2">Guardar</button>
                <a href="{{ route('consults.index') }}"  class="btn btn-success mt-2">
                    Regresar
                </a>
            </form>
        </div>
    </div>


@endsection
