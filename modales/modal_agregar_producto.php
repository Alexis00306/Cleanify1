<!-- Modal Producto -->
<div class="modal fade" id="modalProducto" tabindex="-1" role="dialog" aria-labelledby="modalProductoLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalProductoLabel">
                    <i class="fas fa-box-open"></i> Agregar Producto
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formProducto">
                    <!-- Selector de Imagen -->
                    <div class="form-group">
                        <label for="imagen" class="font-weight-bold">Imagen del Producto:</label>
                        <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
                    </div>

                    <div class="form-group">
                        <label for="nombre_producto" class="font-weight-bold">Nombre del Producto:</label>
                        <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion" class="font-weight-bold">Descripción:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="stock" class="font-weight-bold">Stock:</label>
                        <input type="number" class="form-control" id="stock" name="stock" required>
                    </div>
                    <div class="form-group">
                        <label for="precio" class="font-weight-bold">Precio:</label>
                        <input type="text" class="form-control" id="precio" name="precio" required>
                    </div>

                    <!-- Dropdown de Categoría -->
                    <div class="form-group">
                        <label for="categoria" class="font-weight-bold">Categoría:</label>
                        <select class="form-control" id="categoria" name="categoria" required>
                            <option value="">Seleccione una categoría:</option>
                            <option value="1">Limpiadores</option>
                            <option value="2">Desinfectantes</option>
                            <option value="3">Multiusos</option>
                            <option value="4">Higiene</option>
                            <option value="5">Cuidados del hogar</option>
                            <option value="6">Accesorios</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="fas fa-times"></i> Cancelar
                </button>
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Guardar
                </button>
            </div>
        </div>
    </div>
</div>