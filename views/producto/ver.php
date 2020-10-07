<?php if (isset($product)): ?>
    <h1><?=$product->nombre?></h1>
    <div id="detail-product">
        <div class="image">
            <?php if ($product->imagen != null): ?>
                <img src="<?=base_url?>uploads/images/<?=$product->imagen?>" alt="<?=$product->nombre?>">
            <?php else: ?>
                <img src="<?=base_url?>assets/img/camiseta.png" alt="ropa">
            <?php endif; ?>
        </div>
        <div class="data">
            <p><?=$product->descripcion?></p>
            <p><strong>$<?=$product->precio?></strong></p>
            <a href="#" class="btn btn-outline-dark w-50 d-block"><i class="fas fa-shopping-cart"></i>  Agregar al Carrito</a>
        </div>
    </div>
<?php else: ?>
    <h1>El producto NO existe</h1>
<?php endif; ?>