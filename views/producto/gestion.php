<h1>Gestión de productos</h1>

<a style="color:white !important;" href="<?=base_url?>producto/crear" class="btn btn-success mb-3">Añadir Producto</a>

    <!--NOTIFICACION DE CREAR UN PRODUCTO-->
    <?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>El producto</strong> se ha añadido correctamente.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] !== 'complete'): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>El producto NO</strong> se ha añadido correctamente.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <?php Utils::deleteSession('producto'); ?>

    <!--NOTIFICACION DE BORRAR UN PRODUCTO-->
    <?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>El producto</strong> se ha borrado correctamente.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] !== 'complete'): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>El producto NO</strong> se ha borrado correctamente.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <?php Utils::deleteSession('delete'); ?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">PRECIO</th>
        <th scope="col">STOCK</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php while($pro = $productos->fetch_object()): ?>
        <tr>
            <td><?= $pro->id; ?></td>
            <td><?= $pro->nombre; ?></td>
            <td>$<?= $pro->precio; ?></td>
            <td><?= $pro->stock; ?></td>
            <td>
                <a style="color: black !important;" href="<?=base_url?>producto/editar&id=<?=$pro->id?>" class="btn btn-warning">Editar</a>
                <a style="color: white !important;" href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>



