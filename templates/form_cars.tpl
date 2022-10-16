 <h1>Tabla de autos </h1>
        
<!-- formulario de alta de tarea -->
<form action="agregarauto" method="POST"  class="my-4">
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <label>Nombre del auto</label>
                <input name="name" type="text" class="form-control" required>
            </div>
            <div class="col-3">
            <div class="form-group">
                <label>Fecha de lanzamiento</label>
                <input name="date" type="number" class="form-control" required>
            </div>
        </div>
          <div class="col-3">
            <div class="form-group">
                <label>Color</label>
                <input name="colour" type="text" class="form-control" required>
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Prioridad</label>
                <select name="priority" class="form-control" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Categoria</label>
                <select name="categoria" class="form-control">
                {foreach from=$categorias item=$categoria}
                    <option value={$categoria->id}>{$categoria->nombre}</option>
                {/foreach}
                </select>
            </div>
        </div>
    
    <button type="submit" class="btn btn-success">Enviar</button>
</form>

