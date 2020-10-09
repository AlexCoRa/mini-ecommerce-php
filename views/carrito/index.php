<h1>Carrito de Compras</h1>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Imagen</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Unidades</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($carrito as $indice => $elemento): ?>
        <?php $producto = $elemento['producto']; ?>
        <tr>
            <td>
                <?php if ($producto->imagen != null): ?>
                    <img src="<?=base_url?>uploads/images/<?=$producto->imagen?>" alt="<?=$producto->nombre?>">
                <?php else: ?>
                    <img src="<?=base_url?>assets/img/camiseta.png" alt="ropa">
                <?php endif; ?>
            </td>
            <td><?=$producto->nombre?></td>
            <td>$<?=$producto->precio?></td>
            <td><?=$elemento['unidades']?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php $stats = Utils::statsCarrito(); ?>
<br>
<div class="container">
    <h5 class="float-left">Total: $<?=$stats['total']?>.00 </h5>
    <a style="color: white;" href="<?=base_url?>pedido/hacer" class="btn btn-primary float-right">Hacer pedido</a>
</div>