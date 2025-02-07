<?php
require '../config/config.php';

if (isset($_GET['query'])) {
    $query = $_GET['query'];

    // Consulta para buscar productos cuyo nombre empiece con la cadena de búsqueda
    $sql = "SELECT * FROM productos WHERE nombre_producto LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $queryLike);
    $queryLike = "$query%";
    $stmt->execute();
    $result = $stmt->get_result();

    $productos = [];
    while ($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }

    // Retornar los resultados como JSON
    echo json_encode($productos);
}
?>