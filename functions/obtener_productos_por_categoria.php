<?php
require '../config/config.php';

// Verifica si se ha pasado el ID de la categoría
if (isset($_GET['categoria_id'])) {
    $categoria_id = intval($_GET['categoria_id']);

    $sql = "SELECT id_producto, imagen, nombre_producto, descripcion, precio FROM productos WHERE id_categoria = $categoria_id";

    $result = $conn->query($sql);

    $productos = [];
    while ($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }

    // Verifica si hay productos y devuelve la respuesta JSON
    if (empty($productos)) {
        echo json_encode(["message" => "No se encontraron productos en esta categoría"]);
    } else {
        echo json_encode($productos);
    }
} else {
    // Si no se pasa el ID de categoría, devuelve un error
    echo json_encode(["error" => "Falta el ID de la categoría"]);
}
?>