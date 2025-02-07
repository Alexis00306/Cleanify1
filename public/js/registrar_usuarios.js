$(document).ready(function () {

    // Capturar el evento de envío del formulario de registro
    $("#Registro").submit(function (e) {
        e.preventDefault();

        var datos = $(this).serialize();

        $.ajax({
            type: "POST",
            url: '/PL/functions/registrar_usuario.php',
            data: datos,
            dataType: "json",  // Esperamos que el servidor devuelva JSON
            success: function (response) {
                console.log(response);  // Agregado para ver la respuesta en la consola

                if (response.success) {
                    // Mostrar alerta de éxito
                    mostrarAlerta("Usuario registrado con éxito.", "success");
                    $('#registerModal').modal('hide');  // Cierra la ventana modal al registrar
                    $("#Registro")[0].reset();
                } else {
                    // Mostrar alerta de error
                    mostrarAlerta("Error: " + response.message, "danger");
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error("Error en la solicitud AJAX:", textStatus, errorThrown);
                // Mostrar alerta de error
                mostrarAlerta("Ocurrió un error al procesar la solicitud.", "danger");
            }
        });
    });

    // Función para mostrar alertas
    function mostrarAlerta(mensaje, tipo) {
        let alerta = `<div class="alert alert-${tipo} alert-dismissible fade show" role="alert"
                        style="position: fixed; bottom: 20px; right: 20px; z-index: 1050; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);">
                        <i class="fas fa-exclamation-triangle"></i>
                        <strong>¡Atención!</strong> ${mensaje}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>`;

        // Mostrar la alerta
        $("#loginErrorContainer").html(alerta);

        // Cerrar la alerta después de 5 segundos
        setTimeout(() => {
            $(".alert").alert("close");
        }, 5000);
    }

});
