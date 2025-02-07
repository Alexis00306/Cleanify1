<?php
require '../config/config.php';

header('Content-Type: application/json');

$sql = "SELECT id_producto, imagen, nombre_producto, descripcion, precio, stock FROM productos";
$result = $conn->query($sql);

$productos = [];
while ($row = $result->fetch_assoc()) {
    $productos[] = $row;
}

echo json_encode($productos);
?>