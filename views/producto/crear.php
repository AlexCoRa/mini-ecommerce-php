<?php if (isset($edit) && isset($pro) && is_object($pro)): ?>
    <h1>Editar producto: <strong><?=$pro->nombre?></strong></h1>
    <?php $url_action = base_url . "producto/save&id=".$pro->id; ?>
<?php else: ?>
    <h1>Crear nuevo producto</h1>
    <?php $url_action = base_url . "producto/save"; ?>
<?php endif; ?>

<div class="container">


    <form action="<?=$url_action?>" method="POST" enctype="multipart/form-data"> <!--enctype="multipart/form-data" recibir archivos -->
        <div class="form-row">                                                              <!--                              en un formulario -->
            <div class="form-group col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?=isset($pro) && is_object($pro) ?$pro->nombre :''; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" name="precio" placeholder="$" value="<?=isset($pro) && is_object($pro) ?$pro->precio :''; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Oferta</label>
                <input type="number" class="form-control" name="oferta" value="<?=isset($pro) && is_object($pro) ?$pro->oferta :''; ?>">
            </div>
            <div class="form-group col-md-4">

                <label for="categoria">Categoría</label>
                <?php $categorias = Utils::showCategorias(); ?>
                <select name="categoria" class="form-control">
                    <?php while ($cat = $categorias->fetch_object()): ?>
                        <option value="<?=$cat->id?>" <?=isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' :''; ?>>
                           <?= $cat->nombre ?>
                        </option>
                    <?php endwhile;?>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Stock</label>
                <input type="number" class="form-control" name="stock" value="<?=isset($pro) && is_object($pro) ?$pro->stock :''; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Descripción</label>
            <input type="text" class="form-control" name="descripcion" value="<?=isset($pro) && is_object($pro) ?$pro->descripcion :''; ?>">
        </div>
            <div class="form-group">
                <label for="imagen">Añadir Imagen</label>
                <?php if(isset($pro) && is_object($pro) && !empty($pro->imagen)): ?>
                    <img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" alt="<?=$pro->imagen?>">
                <?php endif; ?>
                <input type="file" class="form-control-file" name="imagen">
            </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>