<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <!-- Logo con imagen -->
        <a class="navbar-brand" href="/PL/">
            <img src="/PL/public/img/logo.png" alt="Logo" style="height: 60px;">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Enlaces y contenido colapsable -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <?php
            $currentPage = basename($_SERVER['PHP_SELF']);
            if ($currentPage === "index.php") {
                ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown mr-3">
                        <a class="nav-link dropdown-toggle" href="#" id="userMenu" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Categorias
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" href="#productos" id="categoriaDropdown"
                            aria-labelledby="userMenu">
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#productos">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#mapa">¿Dónde nos ubicamos?</a>
                    </li>
                </ul>
                <?php
            }
            ?>

            <!-- Formulario de búsqueda y link de inicio de sesión -->
            <ul class="navbar-nav ml-auto align-items-center">
                <!-- Formulario de búsqueda -->
                <form class="form-inline">
                    <input class="form-control form-control mr-2" type="search" id="searchQuery" placeholder="Buscar"
                        aria-label="Buscar">
                    <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i></button>
                </form>

                <!-- Link de inicio de sesión con carrito al lado -->
                <li class="nav-item ml-3 d-flex align-items-center">
                    <a class="nav-link d-flex align-items-center" href="pages/login.php">
                        <div class="position-relative">
                            <i class="fas fa-shopping-cart text-white" style="font-size: 1.5em;"></i>
                            <span class="badge badge-danger position-absolute"
                                style="top: 0; right: 0; transform: translate(50%, -50%); font-size: 0.6rem; padding: 3px 5px;"
                                id="cart-count">0</span>
                        </div>
                        <span class="ml-2">Iniciar Sesión</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>