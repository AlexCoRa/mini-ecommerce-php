<h1>Crear nuevos productos</h1>

<div class="container">
    <form action="<?=base_url?>producto/save" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="form-group col-md-6">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" name="precio" placeholder="$">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Oferta</label>
                <input type="number" class="form-control" name="oferta">
            </div>
            <div class="form-group col-md-4">

                <label for="categoria">Categoría</label>
                <?php $categorias = Utils::showCategorias(); ?>
                <select name="categoria" class="form-control">
                    <?php while ($cat = $categorias->fetch_object()): ?>
                        <option value="<?=$cat->id?>">
                           <?= $cat->nombre ?>
                        </option>
                    <?php endwhile;?>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Stock</label>
                <input type="number" class="form-control" name="stock">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Descripción</label>
            <input type="text" class="form-control" name="descripcion">
        </div>
            <div class="form-group">
                <label for="imagen">Añadir Imagen</label>
                <input type="file" class="form-control-file" name="imagen">
            </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>