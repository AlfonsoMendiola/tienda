<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>
    <h1>Tu pedido se ha confirmado</h1>
    <p>Tu pedido ha sido guardado con exito, una vez que realizar la tranferencia bancaria a la cuenta 5656546546, el pedido sera enviado</p> <br>
    
    <?php if(isset($pedido)): ?>
        <h3>Datos del pedido</h3>
        
        Numero de pedido: <?=$pedido->id?> <br>
        Total a pagar: <?=$pedido->coste?> MXN <br>
        Productos: 
        <table>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio Unitario</th>
                <th>Unidades</th>
            </tr>
            <?php while($producto = $productos->fetch_object()): ?>
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
                <td><?=$producto->unidades?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        
    <?php endif; ?>




<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
    <h1>Tu pedido no ha podido procesarce</h1>
    
<?php endif; ?>


