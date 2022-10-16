{include file="header.tpl"}

<h1>Agregar categoria </h1>

<form action="agregarcategoria" method="POST">
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <label> Nombre categoria</label>
                <input name="name" type="text" class="form-control" required>
            </div>

            <div>
                <label>Descripcion</label>
                <input name="description" type="text" class="form-control" required>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
</form>