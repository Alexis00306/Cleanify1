<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detalle de Compra - Cleanify</title>
  <link rel="stylesheet" href="../public/fontawesowe/css/all.min.css" />
  <script src="../public/js/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css" />
  <script src="../public/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

  <!-- Estilos adicionales -->
  <link rel="stylesheet" href="../public/css/estilos.css" />
</head>

<body>
  <?php include '../includes/navbar2.php'; ?>

  <div class="container mt-4">
    <h2 class="mb-4"><i class="fas fa-receipt"></i> Detalle de Compra</h2>

    <div class="card">
      <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
        <h5>Compra #<span id="compra-id"></span></h5>
        <button class="btn btn-danger btn-sm" onclick="descargarPDF()">
          <i class="fas fa-file-pdf"></i> Descargar PDF
        </button>
      </div>
      <div class="card-body">
        <p>
          <strong>Fecha de Compra:</strong>
          <span id="fecha-compra">2025-02-05</span>
        </p>
        <p><strong>Total:</strong> $<span id="total-compra">500.00</span></p>

        <h5 class="mt-4">Productos Comprados</h5>
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>Imagen</th>
              <th>Producto</th>
              <th>Cantidad</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td class="text-center">
                <img class="rounded-circle" src="/PL/public/img/01.png" alt="Detergente Multiusos" width="60" />
              </td>
              <td>Detergente Multiusos</td>
              <td>2</td>
              <td>$200.00</td>
            </tr>
            <tr>
              <td>2</td>
              <td class="text-center">
                <img class="rounded-circle" src="/PL/public/img/02.png" alt="Limpiador Antibacterial" width="60" />
              </td>
              <td>Limpiador Antibacterial</td>
              <td>1</td>
              <td>$300.00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script>
    // Obtener ID de compra desde la URL
    const params = new URLSearchParams(window.location.search);
    const compraId = params.get("id");
    document.getElementById("compra-id").textContent = compraId;

    function descargarPDF() {
      alert("Función para descargar en PDF aún no implementada.");
    }
  </script>

  <!-- Footer -->
  <?php include '../includes/footer.php'; ?>
</body>

</html>