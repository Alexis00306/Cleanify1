<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popover en Imagen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</head>

<body class="text-center p-5">

    <img src="https://via.placeholder.com/150" class="img-fluid" data-toggle="popover" data-placement="top"
        data-content="Este es un popover al pasar el cursor" alt="Imagen con Popover">

    <script>
        $(document).ready(function () {
            $('[data-toggle="popover"]').popover({
                trigger: 'hover' // Activa el popover al pasar el cursor
            });
        });
    </script>

</body>

</html>