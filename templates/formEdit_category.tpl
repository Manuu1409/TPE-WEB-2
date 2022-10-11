{include file="header.tpl"}


<form action="editar/{$categoria}" method="POST">
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <label>Cambiar nombre categoria</label>
                <input name="name" type="text" class="form-control">
            </div>
            <div>
                <label>Cambiar descripcion</label>
                <input name="description" type="text" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Enviar</button>
</form>