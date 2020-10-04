<h1>Gestión de productos</h1>

<a style="color:white !important;" href="<?=base_url?>producto/crear" class="btn btn-success mb-3">Añadir Producto</a>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">PRECIO</th>
        <th scope="col">STOCK</th>
        <th scope="col"></th>
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
            <td><a class="btn btn-warning">Editar</a></td>
            <td><a class="btn btn-danger">Eliminar</a></td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>



