$(document).ready(function () {
    // Cargar todos los productos al iniciar la página
    cargarProductos();


    // Función para cargar todos los productos
    function cargarProductos() {
        $.ajax({
            url: '/PL/functions/obtener_productos.php',
            type: 'GET',
            dataType: 'json',
            success: function(productos) {
                mostrarProductos(productos);
            },
            error: function(xhr, status, error) {
                console.error("Error en AJAX:", status, error);
                $('#lista-productos').html('<p class="text-center text-danger">Error al cargar los productos.</p>');
            }
        });
    }

    // Función para mostrar los productos
    function mostrarProductos(productos) {
        let contenido = '';

        if (productos.length === 0) {
            $('#lista-productos').html(`
                <div class="d-flex flex-column justify-content-center align-items-center w-100 text-center" style="min-height: 200px;">
                    <i class="fas fa-exclamation-triangle fa-3x fa-spin text-info"></i>
                    <h4 class="mt-2 text-info">No se encontraron productos con tu búsqueda.</h4>
                </div>
            `);
             return;
        }

        productos.forEach(function(producto) {
            contenido += `
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card d-flex flex-column h-100">
                    <img src="/PL/public/img/${producto.imagen}" class="card-img-top popover-trigger"
                        data-toggle="popover" data-placement="top"
                        data-content="${producto.descripcion}"
                        onerror="this.onerror=null; this.src='public/img/default.png';">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-truncate">${producto.nombre_producto}</h5>
                        <p class="card-text text-primary font-weight-bold">$${producto.precio}</p>
                        <div class="form-group">
                            <label for="cantidad_${producto.id_producto}">Cantidad:</label>
                            <small>${producto.stock} disponibles</small>
                            <input type="number" class="form-control" id="cantidad_${producto.id_producto}" min="1" max="${producto.stock}" value="1" required>
                        </div>
                        <button class="btn btn-primary btn-block mt-auto">
                            <i class="fas fa-cart-plus"></i> Agregar al Carrito
                        </button>
                    </div>
                </div>
            </div>
            `;
        });

        $('#lista-productos').html(contenido);
    }

    // Función para realizar la búsqueda
    $('#searchQuery').on('keyup', function() {
        var query = $(this).val();

        if(query.length > 1) { // Realizar la búsqueda si el texto es mayor a 2 caracteres
            $.ajax({
                url: '/PL/functions/buscar_productos.php',
                type: 'GET',
                data: { query: query }, // Enviar el término de búsqueda
                dataType: 'json',
                success: function(productos) {
                    mostrarProductos(productos); // Mostrar los productos encontrados
                },
                error: function(xhr, status, error) {
                    console.log('Error al buscar productos: ', error);
                    $('#lista-productos').html('<p class="text-center text-danger">Error al buscar los productos.</p>');
                }
            });
        } else {
            cargarProductos(); // Si la búsqueda está vacía, cargar todos los productos
        }
    });
});


    // Para productos que se agreguen dinámicamente
    $(document).on('mouseenter', '[data-toggle="popover"]', function () {
        $(this).popover('show');
    });

    $(document).on('mouseleave', '[data-toggle="popover"]', function () {
        $(this).popover('hide');
    });



