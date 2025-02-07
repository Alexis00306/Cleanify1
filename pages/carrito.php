<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras - Cleanify</title>
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
        <h2 class="mb-4"><i class="fas fa-shopping-cart"></i> Carrito de Compras</h2>

        <div class="list-group">
            <!-- Producto 1 -->
            <div
                class="list-group-item d-flex justify-content-between align-items-center border rounded shadow-sm mb-3">
                <div class="d-flex align-items-center">
                    <img src="/PL/public/img/02.png" alt="Detergente Multiusos" class="img-fluid"
                        style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px;">
                    <div class="ml-3">
                        <h5 class="mb-1">Detergente Multiusos</h5>
                        <p class="mb-0 text-muted">$100.00</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <button class="btn btn-sm btn-outline-secondary mr-2">-</button>
                    <span class="mr-2">1</span>
                    <button class="btn btn-sm btn-outline-secondary">+</button>
                    <button class="btn btn-sm btn-danger ml-3"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <!-- Producto 2 -->
            <div
                class="list-group-item d-flex justify-content-between align-items-center border rounded shadow-sm mb-3">
                <div class="d-flex align-items-center">
                    <img src="/PL/public/img/01.png" alt="Limpiador Antibacterial" class="img-fluid"
                        style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px;">
                    <div class="ml-3">
                        <h5 class="mb-1">Limpiador Antibacterial</h5>
                        <p class="mb-0 text-muted">$150.00</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <button class="btn btn-sm btn-outline-secondary mr-2">-</button>
                    <span class="mr-2">2</span>
                    <button class="btn btn-sm btn-outline-secondary">+</button>
                    <button class="btn btn-sm btn-danger ml-3"><i class="fas fa-times"></i></button>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-5">
            <h4 class="total-price font-weight-bold text-success">Total: $400.00</h4>
            <button class="btn btn-primary btn-lg">
                <i class="fab fa-paypal"></i> Pagar con PayPal
            </button>
        </div>
    </div>

    <br>
    <br>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>
</body>

</html>