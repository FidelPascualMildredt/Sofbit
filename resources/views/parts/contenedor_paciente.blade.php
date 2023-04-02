<div class="row" >
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$paciente->name}} {{$paciente->lastname}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Información del paciente</h6>
              <p class="card-text"> <b>Fecha de nacimiento: </b>  {{$paciente->birthdate->format('Y-m-d')}} </p>
              <p class="card-text"> <b>Edad: </b>  {{$paciente->birthdate->age}} </p>
              <p class="card-text"> <b>Sexo: </b>  {{$paciente->gender == 'F' ? 'Femenino' : 'Masculino'}} </p>
              <p class="card-text"> <b>Email: </b>  {{$paciente->email ?? 'No tiene email'}} </p>

            </div>
          </div>
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
    <div class="col-md-12 mt-3 mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea name="descripcion" id="descripcion" rows="4" class="form-control" width="100%"></textarea>
    </div>
</div>

<hr />

<div class="card">
    <div class="card-header">
        Medicamentos
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="medicamento" class="form-label">Medicamento</label>
                <input type="text" class="form-control" id="medicamento" placeholder="Paracetamol">
            </div>
            <div class="col-md-3 mb-3">
                <label for="dosis" class="form-label">Dosis</label>
                <input type="text" class="form-control" id="dosis" placeholder="1">
            </div>
            <div class="col-md-3 mb-3">
                <label for="hora" class="form-label">Hora</label>
                <input type="text" class="form-control" id="hora" placeholder="Cada 8 horas">
            </div>
            <div class="col-md-3 mb-3">
                <label for="tiempo" class="form-label">Tiempo</label>
                <input type="text" class="form-control" id="tiempo" placeholder="Durante una semana">
            </div>

            <div>
                <button type="button" class="btn btn-success">Limpiar</button>
                <button type="button" class="btn btn-primary" id="agregar">Agregar</button>
            </div>
        </div>
    </div>
</div>

<hr />

<table class="table" id="tabla_medicamentos">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Medicamento</th>
            <th scope="col">Dosis</th>
            <th scope="col">Hora</th>
            <th scope="col">Tiempo</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">

    </tbody>
</table>


<script>
    let medicamento='';
    let dosis='';
    let hora='';
    let tiempo='';
    $(document).ready(function() {


        $('#agregar').click(function(){


            validate();
        });

        function getData(){
            let medicamento = document.getElementById('medicamento').value;
            let dosis = document.getElementById('dosis').value;
            let hora = document.getElementById('hora').value;
            let tiempo = document.getElementById('tiempo').value;
            console.log('Medicamento '+ medicamento);
            console.log('dosis '+ dosis);
            console.log('hora '+ hora);
            console.log('tiempo '+ tiempo);

        };

        //----------
        function validate(){

            getData();
            let messages='';
            console.log(medicamento)

            if(medicamento == ''){
                messages = "El campo medicamento esta vacio\n"
            }

            if(dosis == ''){
                messages += "El campo dosis esta vacio\n"
            }

            if(hora == ''){
                messages += "El campo hora esta vacio\n"
            }

            if(tiempo == ''){
                messages += "El campo tiempo esta vacio\n"
            }

            if(messages == ''){
                return true;
            }else{
                alert(messages);
                return false;
            }
        }

    });

</script>
