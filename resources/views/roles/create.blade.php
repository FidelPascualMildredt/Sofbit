////ejemplo chat
<script>
    $(document).ready(function() {
        $("#agregar").click(function() {
            var datos = {
                peso: $("#peso").val(),
                altura: $("#altura").val(),
                presion: $("#presion").val(),
                temperatura: $("#temperatura").val(),
                descripcion: $("#descripcion").val(),
                medicamento: $("#medicamento").val(),
                dosis: $("#dosis").val(),
                hora: $("#hora").val(),
                tiempo: $("#tiempo").val(),
            };

            $.ajax({
                type: "POST",
                url: "/crear-registro",
                data: datos,
                success: function(response) {
                    // Aquí puedes mostrar una alerta de éxito o redirigir a otra página
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Aquí puedes mostrar una alerta de error
                }
            });
        });
    });
    </script>

//
