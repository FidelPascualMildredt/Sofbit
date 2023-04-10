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
            <div class="col-12 mb-3">
                <label for="nota" class="form-label">Nota</label>
                <textarea name="nota" class="form-control" id="nota" rows="2"></textarea>
            </div>

            <div>
                <button onclick="limpiarFormMedicameto()" type="button" class="btn btn-success">Limpiar</button>
                <button type="button" class="btn btn-primary" id="agregar">Agregar</button>
            </div>
        </div>
    </div>
</div>

<hr />

<table class="table" id="tabla_medicamentos">
    <thead>
        <tr>
            {{--  <th scope="col">#</th>  --}}
            <th scope="col">Medicamento</th>
            <th scope="col">Dosis</th>
            <th scope="col">Hora</th>
            <th scope="col">Tiempo</th>
            <th scope="col">Nota</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">

    </tbody>
</table>

<button type="button" class="btn btn-primary" id="guardar">Guardar</button>




<script>
    // declaramos Variables de forma global
    let medicamento='';
    let dosis='';
    let hora='';
    let tiempo='';
    let nota='';
    let descripcion='';
    let dataFormulario='';

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.borrar', function (event) {
            event.preventDefault();
            if(confirm("Esta seguro que desa eliminar el medicamento?")){
                $(this).closest('tr').remove();
            }
        });

        $('#guardar').click(function(){
            descripcion = document.getElementById('descripcion').value;
            //console.log('descripcion '+ descripcion);
            if(validateSave()){
                getDataSave();
                $.ajax({
                    url:'/guardarDatosReceta',
                    data:dataFormulario,
                    type:'post',
                    success: function (response) {
                        //resetUI();
                        window.location.reload();
                        alert(response.success);
                    },
                    statusCode: {
                        404: function() {
                            alert('web not found');
                        }
                    },
                    error:function(x,xs,xt){
                        //nos dara el error si es que hay alguno
                        window.open(JSON.stringify(x));
                        //alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
                    }
                });
            }
        });


        function getDataSave(){
            var data = [];
            var paciente_id = $('#paciente').find(":selected").val();

            $('#tabla_medicamentos tr').each(function(){
                /* Obtener todas las celdas */
                var celdas = $(this).find('td');

                var dataExtracts = [];
                /* Mostrar el valor de cada celda */
                celdas.each(function(){
                    dataExtracts.push($(this).html());
                });
                dataExtracts.pop()

                data.push(dataExtracts);
                //console.log(dataExtracts);

            });
            data.shift()


            dataFormulario = {
                'paciente_id':paciente_id,
                'descripcion':descripcion,
                'medicamentos':data
            };
            //console.log(dataFormulario);
        }

        function validateSave(){
            let messages='';
            //console.log(medicamento)
            var nFilas = $("#tabla_medicamentos tr").length;

            if(descripcion == ''){
                messages = "El campo descripción esta vacio\n"
            }


            if(nFilas == 1){
                messages += "No ha agregado ningún medicamento";
            }


            if(messages == ''){
                return true;
            }else{
                alert(messages);
                return false;
            }
        }

        $('#agregar').click(function(){

            if(validate()){
                var table = document.getElementById("tabla_medicamentos");
                var row = table.insertRow(-1);
                 //this adds row in 0 index i.e. first place
                row.innerHTML = '<td>'+medicamento+'</td>'+
                '<td>'+dosis+'</td>'+
                '<td>'+hora+'</td>'+
                '<td>'+tiempo+'</td>'+
                '<td>'+nota+'</td>'+
                '<td><button class="btn btn-danger borrar">Eliminar</button></td>';

                limpiarFormMedicameto();
            }
        });

        function getData(){
             medicamento = document.getElementById('medicamento').value;
            dosis = document.getElementById('dosis').value;
            hora = document.getElementById('hora').value;
            tiempo = document.getElementById('tiempo').value;
            nota = document.getElementById('nota').value;
            //console.log('Medicamento '+ medicamento);
            //console.log('dosis '+ dosis);
            //console.log('hora '+ hora);
            //console.log('tiempo '+ tiempo);
        };

        //----------
        function validate(){

            getData();
            let messages='';
            //console.log(medicamento)

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

    function resetVariables(){
        dataFormulario = "";
        medicamento = "";
        dosis = "";
        hora = "";
        tiempo = "";
        nota = "";
    }

    function limpiarFormMedicameto(){
        resetVariables();
        document.getElementById('medicamento').value="";
        document.getElementById('dosis').value="";
        document.getElementById('hora').value="";
        document.getElementById('tiempo').value="";
        document.getElementById('nota').value="";
    }

</script>
