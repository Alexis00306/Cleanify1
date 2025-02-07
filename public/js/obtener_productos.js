$(document).ready(function () {
    // Cargar todos los productos al iniciar la página
    cargarProductos();

    // Realizar la solicitud AJAX para obtener las categorías
    $.ajax({
        url: '/PL/functions/obtener_categorias.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#categoriaDropdown').empty();  // Limpiar el dropdown de categorías

            // Crear los enlaces de las categorías en el dropdown
            data.forEach(function(categoria) {
                $('#categoriaDropdown').append(
                    '<a class="dropdown-item" href="#" data-id="' + categoria.id_categoria + '">' + categoria.categoria + '</a>'
                );
            });
        },
        error: function(xhr, status, error) {
            console.log('Error al cargar las categorías: ', error);
        }
    });

    // Evento cuando se selecciona una categoría
    $(document).on('click', '.dropdown-item', function(e) {
        e.preventDefault();

        var categoriaId = $(this).data('id');  // Obtener el ID de la categoría seleccionada

        // Realizar la solicitud AJAX para obtener los productos de la categoría seleccionada
        $.ajax({
            url: '/PL/functions/obtener_productos_por_categoria.php',
            type: 'GET',
            data: { categoria_id: categoriaId },  // Enviar el ID de la categoría seleccionada
            dataType: 'json',
            success: function(data) {
                mostrarProductos(data);
            },
            error: function(xhr, status, error) {
                console.log('Error al cargar los productos: ', error);
                $('#lista-productos').html('<p class="text-center text-danger">Error al cargar los productos.</p>');
            }
        });
    });

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



