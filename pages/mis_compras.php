<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Compras - Cleanify</title>
    <link rel="stylesheet" href="../public/fontawesowe/css/all.min.css" />
    <script src="../public/js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
    <script src="../public/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <!-- Estilos adicionales -->
    <link rel="stylesheet" href="../public/css/estilos.css">

<body>

    <?php include '../includes/navbar2.php'; ?>

    <div class="container mt-4">
        <h2 class="mb-4"><i class="fas fa-shopping-cart"></i> Mis Compras</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-hover mb-5">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2025-02-05</td>
                        <td>$500.00</td>
                        <td>
                            <button class="btn btn-primary btn-sm" onclick="verDetalle(1)">
                                <i class="fas fa-eye"></i> Ver Detalle
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2025-02-03</td>
                        <td>$350.00</td>
                        <td>
                            <button class="btn btn-primary btn-sm" onclick="verDetalle(2)">
                                <i class="fas fa-eye"></i> Ver Detalle
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2025-01-28</td>
                        <td>$120.00</td>
                        <td>
                            <button class="btn btn-primary btn-sm" onclick="verDetalle(3)">
                                <i class="fas fa-eye"></i> Ver Detalle
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function verDetalle(id) {
            window.location.href = 'detalle_compra.php?id=' + id;
        }
    </script>

    <br>
    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>
</body>

</html>