
<?php if(isset($categoria)): ?>
    <h1><?=$categoria->nombre;?></h1>
    
    <?php if($productos->num_rows == 0): ?>
        <p>No hay productos para mostar</p>
    <?php else: ?>
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
    <?php endif; ?>


<?php else:?>
    <h1>La Categoria no existe</h1>
<?php endif;?>