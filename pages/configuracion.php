<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración de Perfil</title>
    <link rel="stylesheet" href="../public/fontawesowe/css/all.min.css" />
    <script src="../public/js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
    <script src="../public/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <!-- Estilos adicionales -->
    <link rel="stylesheet" href="../public/css/estilos.css">
</head>

<body>

    <?php include '../includes/navbar2.php'; ?>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0"> <i class="fas fa-users-cog"></i> Configuración de Perfil</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <!-- Foto de perfil -->
                            <div class="text-center mb-4">
                                <img src="https://via.placeholder.com/150" alt="Foto de perfil"
                                    class="rounded-circle mb-3" id="profileImage"
                                    style="width: 150px; height: 150px; object-fit: cover;">
                                <div>
                                    <button type="button" class="btn btn-outline-primary btn-sm"
                                        onclick="document.getElementById('uploadProfileImage').click();">
                                        <i class="fas fa-camera"></i> Cambiar Foto
                                    </button>
                                    <input type="file" id="uploadProfileImage" class="d-none" accept="image/*"
                                        onchange="previewImage(event)">
                                </div>
                            </div>

                            <!-- Datos personales -->
                            <div class="form-group">
                                <label for="nombre"><i class="fas fa-address-card"></i> Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="email"><i class="fas fa-envelope"></i> Correo Electrónico</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Ingresa tu correo electrónico" required>
                            </div>

                            <div class="form-group">
                                <label for="telefono"><i class="fas fa-phone"></i> Teléfono</label>
                                <input type="tel" class="form-control" id="telefono"
                                    placeholder="Ingresa tu número de teléfono" required>
                            </div>


                            <div class="form-group">
                                <label for="telefono"><i class="fas fa-map-marker-alt"></i> Direccion</label>
                                <input type="tel" class="form-control" id="telefono"
                                    placeholder="Ingresa tu número de teléfono" required>
                            </div>

                            <!-- Botones de acción -->
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save"></i> Guardar Cambios
                                </button>
                                <a type="button" href="../pages/home.php" class="btn btn-danger">
                                    <i class="fas fa-times"></i> Cancelar
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Previsualizar imagen cargada
        function previewImage(event) {
            const input = event.target;
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('profileImage').src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>
</body>

</html>