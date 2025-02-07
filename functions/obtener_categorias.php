<?php
require '../config/config.php';

header('Content-Type: application/json');

$sql = "SELECT * from categoria";
$result = $conn->query($sql);

$categorias = [];
while ($row = $result->fetch_assoc()) {
    $categorias[] = $row;
}

echo json_encode($categorias);
?>