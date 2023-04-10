este lo saque core
ido segundo intento:<script>
    $(document).ready(function() {
        let medicamento='';
        let dosis='';
        let hora='';
        let tiempo='';

        $('#agregar').click(function(){
            if(validate()){
                let dataFormulario = {
                    medicamento: medicamento,
                    dosis: dosis,
                    hora: hora,
                    tiempo: tiempo
                };
                console.log(dataFormulario);

                $.ajax({
                    url:'guardarDatosReceta',
                    data:dataFormulario,
                    type:'post',
                    success: function (response) {
                        alert(response.success);
                    },
                    statusCode: {
                        404: function() {
                            alert('web not found');
                        }
                    },
                    error:function(x,xs,xt){
                        console.log(x);
                        alert('error: ' + xs + "\n error throwed: " + xt);
                    }
                });
            }
        });

        function getData(){
            medicamento = document.getElementById('medicamento').value;
            dosis = document.getElementById('dosis').value;
            hora = document.getElementById('hora').value;
            tiempo = document.getElementById('tiempo').value;
            console.log('Medicamento '+ medicamento);
            console.log('dosis '+ dosis);
            console.log('hora '+ hora);
            console.log('tiempo '+ tiempo);
        };

        function validate(){
            getData();
            let messages='';

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

j
