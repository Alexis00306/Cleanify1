<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Deseos - Cleanify</title>

    <link rel="stylesheet" href="../public/fontawesowe/css/all.min.css" />
    <script src="../public/js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
    <script src="../public/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <!-- Estilos adicionales -->
    <link rel="stylesheet" href="../public/css/estilos.css">
    <link rel="stylesheet" href="../public/css/deseos.css">


</head>

<body>


    <?php include '../includes/navbar2.php'; ?>


    <div class="container mt-4">
        <h2 class="mb-4"><i class="fas fa-heart"></i> Mi Lista de Deseos</h2>

        <div class="row">
            <!-- Producto 1 -->
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card d-flex flex-column h-100">
                    <div class="position-absolute p-2" style="right: 0;">
                        <button class="btn-heart" onclick="toggleHeart(this)">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <img src="/PL/public/img/02.png" class="card-img-top" alt="Detergente Multiusos">
                    <div class="card-body">
                        <h5 class="card-title text-truncate">Detergente Multiusos</h5>
                        <p class="card-text text-primary font-weight-bold">$100.00</p>
                        <button class="btn btn-primary btn-block"><i class="fas fa-cart-plus"></i> Agregar al
                            Carrito</button>
                    </div>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card d-flex flex-column h-100">
                    <div class="position-absolute p-2" style="right: 0;">
                        <button class="btn-heart" onclick="toggleHeart(this)">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <img src="/PL/public/img/01.png" class="card-img-top" alt="Limpiador Antibacterial">
                    <div class="card-body">
                        <h5 class="card-title text-truncate">Limpiador Antibacterial</h5>
                        <p class="card-text text-primary font-weight-bold">$150.00</p>
                        <button class="btn btn-primary btn-block"><i class="fas fa-cart-plus"></i> Agregar al
                            Carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

</body>

</html>

<script>
    function toggleHeart(button) {
        var icon = button.querySelector('i');
        icon.classList.toggle('fa-heart');  // Cambia al corazón vacío
        icon.classList.toggle('fa-heart-broken');  // Cambia al corazón lleno
    }
</script>