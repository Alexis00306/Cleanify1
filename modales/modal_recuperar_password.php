<!-- Modal de Recuperación de Contraseña -->
<div class="modal fade" id="PasswordModal" tabindex="-1" role="dialog" aria-labelledby="recoverPasswordModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recoverPasswordModalLabel">Recuperar Contraseña</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="recuperar_contraseña.php" method="POST">
                    <!-- Campo para correo electrónico -->
                    <div class="form-group">
                        <label for="emailRecover"><b>Correo Electrónico:</b></label>
                        <input type="email" class="form-control" id="emailRecover" name="email"
                            placeholder="Introduce tu correo electrónico" required>
                    </div>
                    <!-- Botón para enviar la solicitud -->
                    <button type="submit" class="btn btn-primary btn-block">Enviar enlace de recuperación</button>
                </form>
            </div>
        </div>
    </div>
</div>