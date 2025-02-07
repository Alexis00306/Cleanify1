<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleanify - Inicio</title>

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
    <?php include '../includes/menu_lateral.php'; ?>
    <script src="/PL/public/js/obtener_productos_home.js"></script>

    <!-- Sección de productos -->
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Sección de Productos -->
            <main class="col-md-9 col-lg-10 offset-md-3 offset-lg-2">
                <h2 class="text-center mb-4">Nuestros Productos</h2>
                <div class="row" id="lista-productos">

                </div>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>
</body>

</html>

<script>
    function toggleHeart(button) {
        let icon = button.querySelector("i");
        icon.classList.toggle("far"); // Corazón sin llenar
        icon.classList.toggle("fas"); // Corazón lleno
    }
</script>