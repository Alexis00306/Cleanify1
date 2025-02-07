<?php
// Reemplazar con la URL dinámica basada en la página actual
$current_page = basename($_SERVER['PHP_SELF']);  // Obtiene el nombre del archivo PHP actual

// Usar esa variable para definir la lógica de breadcrumbs
$breadcrumbs = generate_breadcrumbs($current_page);
?>

<div class="container">
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <?php
            foreach ($breadcrumbs as $index => $breadcrumb) {
                // Si no es el último breadcrumb, mostrar como enlace
                if ($index < count($breadcrumbs) - 1) {
                    echo '<li class="breadcrumb-item"><a href="' . $breadcrumb['url'] . '">' . $breadcrumb['name'] . '</a></li>';
                } else {
                    // Si es el último breadcrumb, no mostrar como enlace
                    echo '<li class="breadcrumb-item active" aria-current="page">' . $breadcrumb['name'] . '</li>';
                }
            }
            ?>
        </ol>
    </nav>
</div>


<style>
    .breadcrumb {
        background-color: transparent;
        padding: 0;
        margin-bottom: 0;
        list-style: none;
    }

    .breadcrumb-item {
        display: inline-block;
    }

    .breadcrumb-item a {
        text-decoration: none;
        color: rgb(0, 0, 0);
    }

    .breadcrumb-item a:hover {
        text-decoration: underline;
    }

    .breadcrumb-item+.breadcrumb-item::before {
        content: ">";
        padding: 0 10px;
        color: #6c757d;
    }
</style>