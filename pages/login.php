<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cleanify</title>

    <link rel="stylesheet" href="../public/fontawesowe/css/all.min.css" />
    <script src="../public/js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
    <script src="../public/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <!-- Estilos adicionales -->
    <link rel="stylesheet" href="../public/css/estilos.css">
    <link rel="stylesheet" href="../public/css/login.css">
</head>


<body>

    <?php include '../includes/navbar.php'; ?>
    <script src="../public/js/login.js"></script>
    <script src="../public/js/registrar_usuarios.js"></script>


    <br>
    <br>

    <!-- Formulario de Login -->
    <div class="login-container">
        <h2><i class="fas fa-user-circle"></i> Iniciar Sesión</h2>

        <form id="loginForm">
            <!-- Correo electrónico -->
            <div class="form-group">
                <label for="email"><b>Correo Electrónico:</b></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Introduce tu correo">
                </div>
            </div>

            <!-- Contraseña -->
            <div class="form-group">
                <label for="password"><b>Contraseña:</b></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Introduce tu contraseña"
                        pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}">
                    <small class="text-muted text-center">
                        Debe tener al menos 8 caracteres, una mayúscula, una minúscula, un número y un carácter
                        especial.
                    </small>
                </div>
            </div>

            <!-- Botón de Login -->
            <button type="submit" class="btn btn-custom btn-block">Iniciar Sesión</button>
        </form>

        <!-- Enlace de Recuperación de Contraseña -->
        <a href="#" class="forgot-password" data-toggle="modal" data-target="#PasswordModal">¿Olvidaste tu
            contraseña?</a>

        <!-- Enlace Registro -->
        <a href="#" class="register-link" data-toggle="modal" data-target="#registerModal">¿No tienes cuenta?
            Regístrate aquí</a>

    </div>
    <br>
    <br>

    <!-- Mensajes de error -->
    <div id="loginErrorContainer"></div>

    <?php include '../modales/modal_recuperar_password.php'; ?>
    <?php include '../modales/modal_registrar_usuario.php'; ?>
    <?php include '../includes/footer.php'; ?>

</body>

</html>