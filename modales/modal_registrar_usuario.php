<!-- Modal de Registro -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Regístrate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Contenedor para mensajes de error -->
                <div id="loginErrorContainer"></div>

                <!-- Formulario de Registro -->
                <form id="Registro">
                    <!-- Nombre -->
                    <div class="form-group">
                        <label><b>Nombre:</b></label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            placeholder="Introduce tu nombre">
                    </div>

                    <!-- Apellidos -->
                    <div class="form-group">
                        <label><b>Apellidos:</b></label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos"
                            placeholder="Introduce tus Apellidos">
                    </div>

                    <!-- Correo -->
                    <div class="form-group">
                        <label><b>Correo:</b></label>
                        <input type="email" class="form-control" id="correo" name="correo"
                            placeholder="Introduce tu correo">
                    </div>

                    <!-- Contraseña -->
                    <div class="form-group">
                        <label><b>Contraseña:</b></label>
                        <input type="password" class="form-control" id="pass" name="pass"
                            placeholder="Introduce tu contraseña">
                    </div>

                    <!-- Botón de Registro -->
                    <button type="submit" class="btn btn-primary btn-block">Registrarme</button>
                </form>
            </div>
        </div>
    </div>
</div>