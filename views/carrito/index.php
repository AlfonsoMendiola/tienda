<h1>Carrito de la compra</h1>
<table>
    <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio Unitario</th>
        <th>Unidades</th>
    </tr>
    <?php 
        foreach($carrito as $indice => $elemento): 
        $producto = $elemento['producto'];
    ?>
        <tr>
            <td>
                <div class="image">
                    <?php if($producto->imagen != null): ?>
                        <img src="<?=base_url?>uploads/images/<?=$producto->imagen?>" class="img_carrito">
                    <?php else:?>
                        <img src="<?=base_url?>assets/img/camiseta.png" class="img_carrito">
                    <?php endif;?>
                </div>
            </td>
            <td>
                <a href="<?=base_url?>?controller=producto&action=ver&id=<?=$producto->id?>"><?=$producto->nombre?></a>
            </td>
            <td><?=$producto->precio?></td>
            <td><?=$elemento['unidades']?></td>
        </tr>


    <?php endforeach; ?>
</table>
<br>
<div class="total-carrito">
    <?php $stats = Utils::statsCarrito(); ?>
    <h3>Precio total: <?=$stats['total']?> MXN</h3>
    <a href="<?=base_url?>?controller=pedido&action=hacer" class="button button-pedido">Hacer pedido</a>
</div>



