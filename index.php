<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" initial-scale=1.0">
    <title>Cleanify</title>

    <link rel="stylesheet" type="text/css" href="public/fontawesowe/css/all.min.css" />
    <script src="public/js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
    <script src="public/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <link rel="stylesheet" type="text/css" href="public/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="public/css/mapa.css">



</head>

<?php include 'includes/header.php'; ?>
<script src="public/js/obtener_productos.js"></script>
<script src="public/js/obtener_categorias.js"></script>

<body>

    <?php include 'includes/navbar.php'; ?>
    <?php include 'functions/generarbreadcrumbs.php'; ?>
    <?php include 'includes/beadcrumbs.php'; ?>

    <!-- Carrusel de categorías -->
    <section id="categorias" class="py-5 animate__animated animate__fadeIn">
        <div class="container">
            <h2 class="text-center mt-1 mb-4">Categorías</h2>
            <div id="carouselCategorias" class="carousel slide" data-ride="carousel" data-interval="3000">

                <!-- Carrusel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img style="height: 200px;" src="public/img/categorias/limpiadores.jpg"
                                        class="card-img-top" alt="Categoria 1">
                                    <div class="card-body">
                                        <h5 class="card-    title">Limpiadores</h5>
                                        <p class="card-text">Productos para mantener tu hogar limpio.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div style="heigth=120px" class="card">
                                    <img style="height: 200px;" src="public/img/categorias/desinfectantes.jpg"
                                        class="card-img-top" alt="Categoria 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Desinfectantes</h5>
                                        <p class="card-text">Protege tu hogar eliminando bacterias.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img style="height: 200px;" src="public/img/categorias/multiusos.jpeg"
                                        class="card-img-top" alt="Categoria 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Multiusos</h5>
                                        <p class="card-text">Soluciones eficaces para diversas tareas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img style="height: 200px;" src="public/img/categorias/higiene.webp"
                                        class="card-img-top" alt="Categoria 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Higiene</h5>
                                        <p class="card-text">Productos para mantener la higiene del hogar.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img style="height: 200px;" src="public/img/categorias/cuidados_hogar.jpg"
                                        class="card-img-top" alt="Categoria 5">
                                    <div class="card-body">
                                        <h5 class="card-title">Cuidado del hogar</h5>
                                        <p class="card-text">Todo lo necesario para el cuidado de tu casa.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img style="height: 200px;" src="public/img/categorias/accesorios.jpg"
                                        class="card-img-top" alt="Categoria 6">
                                    <div class="card-body">
                                        <h5 class="card-title">Accesorios</h5>
                                        <p class="card-text">Accesorios útiles para tus productos de limpieza.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controles (botones para avanzar o retroceder) -->
                <a class="carousel-control-prev" href="#carouselCategorias" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselCategorias" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Sección de productos -->
    <section id="productos" class="py-5 animate__animated animate__fadeIn">
        <div class="container">
            <h2 class="text-center mb-4">Nuestros Productos</h2>
            <div class="row" id="lista-productos">
            </div>
        </div>
    </section>


    <!-- Sección de mapa -->
    <section id="mapa" class="py-5 animate__animated animate__fadeIn" style="background-color: #f4f4f4;">
        <div class="container">
            <h2 class="text-center mb-4">¿Dónde nos ubicamos?</h2>
            <div id="map" style="height: 400px; width: 100%;"></div>
        </div>
    </section>


    <script>
        // Inicializar el mapa
        const map = L.map('map').setView([21.1342, -99.4586], 5); // Coordenadas de Pinal de Amoles, Querétaro

        // Cargar capas del mapa
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Función para agregar marcador con animación
        function addMarker(lat, lon, popupText) {
            const marker = L.marker([lat, lon]).addTo(map)
                .bindPopup(popupText)
                .openPopup();

            // Aplicar la animación de pulso a la clase del icono
            marker.on('add', function () {
                marker._icon.classList.add('pulse');
            });
        }

        // Agregar marcadores con animación
        addMarker(21.1342, -99.4586, 'Cleanify Querétaro');
        addMarker(14.8924, -92.2545, 'Cleanify Chiapas');
        addMarker(25.6866, -100.3161, 'Cleanify Nuevo León');
        addMarker(21.1743, -86.8466, 'Cleanify Quintana Roo');
        addMarker(22.1566, -100.9855, 'Cleanify San Luis Potosí');
        addMarker(21.8853, -102.2916, 'Cleanify Aguascalientes');

    </script>


    <?php include 'includes/footer.php'; ?>


</body>


<script>
    $(document).ready(function () {
        // Cuando se hace clic en los enlaces de navegación
        $('a[href^="#"]').on('click', function (event) {
            // Prevenir el comportamiento por defecto (desplazamiento normal)
            event.preventDefault();

            // Obtener el destino del enlace
            var target = this.hash;
            var $target = $(target);

            // Comprobar si el destino es válido
            if ($target.length) {
                // Desplazamiento suave con ajuste para la altura de la barra de navegación
                $('html, body').animate({
                    scrollTop: $target.offset().top - $('.navbar').outerHeight() // Ajuste para la altura de la barra
                }, 800, function () {
                    // Actualizar la URL con el hash de la sección después del desplazamiento
                    window.location.hash = target;
                });
            }
        });
    });

</script>





</html>