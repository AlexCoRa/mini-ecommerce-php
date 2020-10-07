<h1>Algunos de nuestros productos</h1>

<?php while ($product = $productos->fetch_object()): ?>
    <div class="product">
        <a href="<?=base_url?>producto/ver&id=<?=$product->id?>">
            <?php if ($product->imagen != null): ?>
               <img src="<?=base_url?>uploads/images/<?=$product->imagen?>" alt="<?=$product->nombre?>">
            <?php else: ?>
                <img src="<?=base_url?>assets/img/camiseta.png" alt="ropa">
            <?php endif; ?>
        </a>
        <h2><?=$product->nombre?></h2>
        <p><?=$product->precio?></p>
        <a href="#" class="btn btn-outline-primary btn-block">Comprar</a>
    </div>
<?php endwhile; ?>


