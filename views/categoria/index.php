<h1>Gestionar Categorías</h1>

<a style="color:white !important;" href="<?=base_url?>categoria/crear" class="btn btn-success mb-3">Crear Categoría</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
        </tr>
    </thead>
    <tbody>
        <?php while($cat = $categorias->fetch_object()): ?>
            <tr>
                <td><?= $cat->id; ?></td>
                <td><?= $cat->nombre; ?></td>           
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
