<?php
header('Content-Type: application/json');  // Asegurarnos de que la respuesta sea JSON

session_start();
require '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Inicializamos un array de respuesta
    $response = array();

    // Consulta para verificar el usuario
    $query = "SELECT * FROM usuario WHERE correo = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                $_SESSION['id_usuario'] = $user['id_usuario'];
                $_SESSION['nombre'] = $user['nombre'];
                $_SESSION['correo'] = $user['correo'];
                $_SESSION['id_tipo_usuario'] = $user['id_tipo_usuario'];

                // Responder con el tipo de usuario
                if ($user['id_tipo_usuario'] == 1) {
                    $response = ['status' => 'success', 'redirect' => 'admin'];
                } else if ($user['id_tipo_usuario'] == 2) {
                    $response = ['status' => 'success', 'redirect' => 'cliente'];
                }
            } else {
                // Contraseña incorrecta
                $response = ['status' => 'error', 'message' => 'Contraseña incorrecta. Por favor, intenta nuevamente.'];
            }
        } else {
            // Correo no registrado
            $response = ['status' => 'error', 'message' => 'El correo no está registrado. Por favor, intenta nuevamente.'];
        }

        $stmt->close();
    } else {
        // Error al preparar la consulta
        $response = ['status' => 'error', 'message' => 'Error al procesar la consulta.'];
    }

    $conn->close();

    // Enviar respuesta en formato JSON
    echo json_encode($response);
}
?>