<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receta medica</title>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet" />

    {{--  <link href="{{ public_path('css/app.css')}}" rel="stylesheet" />  --}}
</head>
<body>

    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <div >
                    <img src="{{asset('icon/icon-medico.png')}}" style="width: 100px; height: 100px;" class="float-start me-3" alt="Icono medico">
                    <div class="pt-2">
                        <h3>Dr. Carlos Estrada Millan</h3>
                        <p>Email: carlos@gmail.com</p>
                    </div>
                </div>

            </div>
            <div class="col-6">
                <div class="text-end pt-2">
                    <p class="h5"> <b>Fecha: </b> {{now()->isoFormat('LLLL')}}</p>
                </div>
            </div>
        </div>
    </div>

         <small class="text-muted"></small>


         <div class="container mt-5">

            <div class="row">
              <div class="col-12">
                <h1 class="text-center">Receta médica</h1>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-12">
                <h2>Medicamentos</h2>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Medicamento</th>
                      <th>Dosis</th>
                      <th>Frecuencia</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Paracetamol</td>
                      <td>500 mg</td>
                      <td>Cada 6 horas</td>
                    </tr>
                    <tr>
                      <td>Prednisona</td>
                      <td>400 mg</td>
                      <td>Cada 8 horas</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-12">
                <h2>Nota</h2>
                <p>Tome los medicamentos según lo indicado en la tabla.</p>
                <p>Si tiene alguna reacción alérgica o efecto secundario, deje de tomar los medicamentos y consulte a su médico.</p>
              </div>
            </div>

          </div>




</body>
</html>
