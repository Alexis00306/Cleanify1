$(document).ready(function () {
    // Manejar el envío del formulario de login
    $("#loginForm").on("submit", function (e) {
        e.preventDefault(); // Evitar el envío tradicional del formulario

        // Obtener los datos del formulario
        let email = $("#email").val();
        let password = $("#password").val();

        // Realizar la solicitud AJAX
        $.ajax({
            url: '/PL/functions/iniciar_sesion.php',
            type: "POST",
            dataType: "json",
            data: {
                email: email,
                password: password,
            },
            success: function (response) {
                if (response.status === "success") {
                    // Redirigir según el tipo de usuario
                    if (response.redirect === "cliente") {
                        window.location.href = "home.php"; // Cambia la ruta
                    } else if (response.redirect === "admin") {
                        window.location.href = "admin.php"; // Cambia la ruta
                    }
                } else {
                    // Mostrar alerta de error
                    mostrarAlerta(response.message, "danger");
                }
            },
            error: function (xhr, status, error) {
                // Mostrar alerta de error en caso de fallo en la solicitud
                mostrarAlerta("Error al conectar con el servidor. Inténtalo de nuevo.", "danger");
            },
        });
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
