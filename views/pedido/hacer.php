<?php if(isset($_SESSION['identity'])): ?>
    <h1>Hacer pedido</h1>
<div class="container">
    <p>
         <a href="<?=base_url?>carrito/index">Ver pedido</a>
    </p>
    <h4>Dirección para el envio:</h4>
    <form action="<?=base_url?>pedido/add" method="POST">
        <div class="form-group">
            <label for="provincia">Municipio</label>
            <input type="text" class="form-control" name="provincia" required>
        </div>
        <div class="form-group">
            <label for="ciudad">Ciudad</label>
            <input type="text" class="form-control" name="ciudad" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" name="direccion" required>
        </div>
        <button type="submit" class="btn btn-primary">Confirmar pedido</button>
    </form>
    <?php else: ?>
        <h1>Necesitas estar identificado</h1>
        <p>Necesitar estar logueado para poder realizar tu pedido</p>
    <?php endif; ?>
</div>