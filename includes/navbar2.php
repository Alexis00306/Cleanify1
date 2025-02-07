<!-- Barra de navegación alternativa -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="/PL/pages/home.php">
            <img src="/PL/public/img/logo.png" alt="Logo" style="height: 60px;">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <!-- Buscador -->
            <form class="form-inline ml-auto mr-3">
                <input class="form-control mr-2" type="search" placeholder="Buscar" id="searchQuery"
                    aria-label="Buscar">
                <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i></button>
            </form>

            <!-- Íconos de configuración, carrito y cerrar sesión -->
            <ul class="navbar-nav">
                <!-- Dropdown de configuración -->
                <li class="nav-item dropdown mr-1">
                    <a class="nav-link dropdown-toggle" href="#" id="userMenu" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user text-white" style="font-size: 1.5em;"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/PL/pages/lista_deseos.php"><i class="fas fa-heart"></i>
                            Lista de deseos</a>
                        <a class="dropdown-item" href="/PL/pages/mis_compras.php"><i class="fas fa-shopping-bag"></i>
                            Mis Compras</a>
                        <a class="dropdown-item" href="/PL/pages/configuracion.php"> <i class="fas fa-cog"></i>
                            Configuración</a>
                    </div>
                </li>
                <!-- Ícono del carrito con insignia -->
                <li class="nav-item mr-3">
                    <a class="nav-link position-relative" href="/PL/pages/carrito.php">
                        <i class="fas fa-shopping-cart text-white" style="font-size: 1.5em;"></i>
                        <span class="badge badge-danger position-absolute"
                            style="top: -5; right: 0; transform: translate(50%, -50%); font-size: 0.7rem; padding: 3px 5px;"
                            id="cart-count">0</span>
                    </a>
                </li>
                <!-- Opción de cerrar sesión -->
                <li class="nav-item">
                    <a class="nav-link" href="/PL/">
                        <i class="fas fa-sign-out-alt text-white" style="font-size: 1.5em;"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>