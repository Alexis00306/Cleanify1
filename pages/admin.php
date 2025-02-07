<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>

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

    <?php include '../includes/navbar_admin.php'; ?>
    <?php include '../modales/modal_agregar_usuario.php'; ?>
    <?php include '../modales/modal_agregar_categoria.php'; ?>
    <?php include '../modales/modal_agregar_producto.php'; ?>
    <?php include '../modales/modal_eliminar.php'; ?>



    <div class="container mt-5">
        <h2 class="text-center">Bienvenido</h2>

        <!-- Navegación -->
        <ul class="nav nav-tabs" id="crudTabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#usuarios">Usuarios</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#categorias">Categorías</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#productos">Productos</a></li>
        </ul>

        <div class="tab-content mt-4">
            <!-- Sección Usuarios -->
            <div class="tab-pane fade show active" id="usuarios">
                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalUsuario"><i
                        class="fas fa-user-plus"></i> Agregar
                    Usuario</button>
                <table class="table table-bordered text-center mb-5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Dirección</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="tablaUsuarios">
                        <tr>
                            <td>1</td>
                            <td><img src="\PL\public\img\47523.png" class="rounded-circle" width="50" height="50"></td>
                            <td>Carlos Alexis</td>
                            <td>Maldonado</td>
                            <td>Independencia</td>
                            <td>alexis@cleanify.com</td>
                            <td>
                                <button class="btn btn-success btn-sm"><i class="fas fa-edit" data-toggle="modal"
                                        data-target="#modalUsuario"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash" data-toggle="modal"
                                        data-target="#modalEliminar"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Sección Categorías -->
            <div class="tab-pane fade" id="categorias">
                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalCategoria"><i
                        class="fas fa-folder-plus"></i> Agregar
                    Categoría</button>
                <table class="table table-bordered text-center mb-5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Categoría</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="tablaCategorias">
                        <tr>
                            <td>1</td>
                            <td>Desinfectantes</td>
                            <td>
                                <button class="btn btn-success btn-sm"><i class="fas fa-edit" data-toggle="modal"
                                        data-target="#modalCategoria"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash" data-toggle="modal"
                                        data-target="#modalEliminar"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Sección Productos -->
            <div class="tab-pane fade" id="productos">
                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalProducto"><i
                        class="fas fa-box-open"></i> Agregar
                    Producto</button>
                <table class="table table-bordered text-center mb-5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Categoría</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="tablaProductos">
                        <tr>
                            <td>1</td>
                            <td><img src="\PL\public\img\01.png" class="rounded-circle" width="50" height="50">
                            </td>
                            <td>Limpiador Multiusos</td>
                            <td>Ideal para limpieza general</td>
                            <td>50</td>
                            <td>$20.00</td>
                            <td>Limpieza</td>
                            <td>
                                <button class="btn btn-success btn-sm"><i class="fas fa-edit" data-toggle="modal"
                                        data-target="#modalProducto"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash" data-toggle="modal"
                                        data-target="#modalEliminar"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <script>
        $(document).ready(function () {
            cargarTablas();
        });

        function cargarTablas() {
            $('#tablaUsuarios').load('usuarios.php');
            $('#tablaCategorias').load('categorias.php');
            $('#tablaProductos').load('productos.php');
        }
    </script>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

</body>




</html>