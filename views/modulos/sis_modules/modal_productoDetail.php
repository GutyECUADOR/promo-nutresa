<div class="modal fade" id="modal_productoDetail" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"> Actualizacion de registro </h4>
        </div>
        <div class="modal-body">
            
        <form>
           
            <div class="input-group">
                <span class="input-group-addon">Nombre: </span>
                <input type="text" class="form-control" id="producto_nombre" readonly>
            </div>

            <div class="input-group">
                <span class="input-group-addon">Etiquetas: </span>
                <input type="text" class="form-control"  id="producto_etiquetas" value="<?php echo DEFAULT_EMAIL?>" readonly>
            </div>
            <div class="input-group">
                <span class="input-group-addon">Grupo: </span>
                <input type="text" class="form-control"  id='producto_grupos' readonly>
            </div>

            </br>


            <div class="form-group">
                <label for="comment">Descripcion:</label>
                <textarea class="form-control tiny" rows="5" id="producto_descripcion"></textarea>
            </div>

        </form>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" @click="actualizarProducto">Actualizar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
        </div>
    </div>
</div>