<h1>Crear nueva categoría</h1>

<div class="container">
    <form action="<?=base_url?>categoria/save" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre de la categoría</label>
            <input type="text" name="nombre" class="form-control" id="nombre">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>