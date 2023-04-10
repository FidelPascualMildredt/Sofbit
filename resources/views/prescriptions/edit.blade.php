@extends('layouts.appDashboard')
@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Editar Receta
            </h6>
        </div>
        <div class="card-body">


            <form action="{{ route('prescriptions.update', $prescription->id) }}" method="POST">
                @method('PUT')
                @csrf


                {{--  <div class="form-group">
                    <label for="consult">Consulta</label>
                    <select class="form-control" name="consult" id="consult">
                        <option value="Elegir">Seleccione una consulta</option>
                        @foreach ($consults as $consult)
                        <option value="{{$consult}}" {{ $prescription->consult == $consult ? 'selected' : '' }}>{{$consult}}</option>
                        @endforeach
                    </select>
                    @error('consult')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>  --}}

                <div class="form-group">
                    <label>Medicamento</label>
                    <input type="text" name="medicament" class="form-control" placeholder="Ingresa el medicamento" value="{{ $prescription->medicament }}">
                    @error('medicament')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Dosis</label>
                    <input type="text" name="quantity" class="form-control" placeholder="Ingresa la dosis" value="{{ $prescription->quantity }}">
                    @error('quantity')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="note">Nota</label>
                    <textarea class="form-control" id="note" name="note" rows="4">{{ $prescription->note }}</textarea>
                    @error('note')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Hora</label>
                    <input type="text" name="hour" class="form-control" placeholder="Ingresa cada cuantas horas" value="{{ $prescription->hour }}">
                    @error('hour')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Tiempo</label>
                    <input type="text" name="time" class="form-control" placeholder="Ingresa por cuanto tiempo(5 días)" value="{{ $prescription->time }}">
                    @error('time')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-2">Guardar</button>
                <a href="{{ route('prescriptions.index') }}"  class="btn btn-success mt-2">
                    Regresar
                </a>
            </form>
        </div>
    </div>


@endsection
