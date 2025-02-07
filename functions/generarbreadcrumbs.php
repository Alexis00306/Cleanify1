<?php

function generate_breadcrumbs($current_page)
{
    // Definir la estructura de la jerarquía
    $breadcrumbs = array();

    // Agregar la página principal o inicio
    $breadcrumbs[] = ['name' => 'Home', 'url' => '/'];
    $breadcrumbs[] = ['name' => 'Accesorios', 'url' => '/'];
    $breadcrumbs[] = ['name' => 'Productos', 'url' => '/'];

    switch ($current_page) {
        case 'category':
            $breadcrumbs[] = ['name' => 'Category', 'url' => '/library/category'];
            break;
    }

    // Retornar la lista de breadcrumbs
    return $breadcrumbs;
}
?>