<!--Contenido central-->

<div id="central">

    <h1>Algunos de nuestros Productos</h1>
    <?php while($product = $productos->fetch_object()): ?>
        <div class="product">
            <a href="<?=base_url?>?controller=producto&action=ver&id=<?=$product->id?>">
                <?php if($product->imagen != null): ?>
                    <img src="<?=base_url?>uploads/images/<?=$product->imagen?>">
                <?php else:?>
                    <img src="<?=base_url?>assets/img/camiseta.png">
                <?php endif;?>
                <h2><?=$product->nombre;?></h2>
            </a>
            <p><?=$product->precio;?></p>
            <a href="<?=base_url?>?controller=carrito&action=add&id=<?=$product->id?>" class="button">Comprar</a>
        </div>
    <?php endwhile; ?>

    
</div>