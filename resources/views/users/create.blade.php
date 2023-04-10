@extends('layouts.appDashboard')
@section('container')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Crear nuevo Usuario
        </h6>
    </div>

    <div class="card-body">

        <form action="{{ route('users.store') }}" method="POST">
            @method('POST')
            @csrf


            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="name" class="form-control" placeholder="Ingresa el nombre" value="{{ old('name') }}">
                @error('name')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Apellido</label>
                <input type="text" name="lastname" class="form-control" placeholder="Ingresa el apellido" value="{{ old('lastname') }}">
                @error('lastname')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Nickname</label>
                <input type="text" name="nickname" class="form-control" placeholder="Ingresa el nickname" value="{{ old('nickname') }}">
                @error('nickname')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="birthdate" class="col-md-2 col-form-label text-md-end">Fecha de Nacimiento</label>

                <div class="col-md-3">
                    <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" required autocomplete="birthdate" autofocus>

                    @error('birthdate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-6">
                <label for="gender" class="col-md-1 col-form-label text-md-end">Sexo</label>

                <div class="col-md-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="Masculino" value="M" required @if(old('gender') == 'M') checked @endif>
                        <label class="form-check-label" for="Masculino">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="Femenino" value="F" required @if(old('gender') == 'F') checked @endif>
                        <label class="form-check-label" for="Femenino">Femenino</label>
                    </div>

                    @error('gender')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            
            <div class="form-group">
                <label>Rol</label>
                <select class="form-control form-select" name="rol">
                    <option value="Elegir" >Seleccione Rol</option>
                    @foreach ($roles as $rol)
                    <option value="{{$rol->id}}" {{old('rol') == $rol->id ? 'selected' : ''}}>{{$rol->id}}</option>
                    @endforeach
                </select>
                @error('rol')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>


            <div class="form-group">
                <label>Correo</label>
                <input type="email" name="email" class="form-control" placeholder="Ingresa el correo" value="{{ old('email') }}">
                @error('email')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="Ingresa la contraseña" value="{{ old('password') }}">
                @error('password')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>




            <button type="submit" class="btn btn-primary mt-2">Guardar</button>
            <a href="{{ route('users.index') }}"  class="btn btn-success mt-2">
                Regresar
            </a>
        </form>
    </div>
</div>




@endsection
