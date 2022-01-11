<!--Barra lateral-->
<aside id="lateral">

    <div id="carrito" class="blok_aside">
        <h3>Mi Carrito</h3>
        <ul>
            <?php $stats = Utils::statsCarrito(); ?>
            <li><a href="<?=base_url?>?controller=carrito&action=index">Productos (<?=$stats['count']?>) </a></li>
            <li><a href="<?=base_url?>?controller=carrito&action=index">Total: <?=$stats['total']?> MXN</a></li>
            <li><a href="<?=base_url?>?controller=carrito&action=index">Ver el Carrito</a></li>
        </ul>
    </div>

    <div id="login" class="block_aside">

        <?php if(!isset($_SESSION['identity'])): ?>
            <h3>Entrar a la web</h3>
            <form action="index.php?controller=usuario&action=login" method="post">
                <label for="email">Email</label>
                <input type="email" name="email">
                <label for="password">Contraseña</label>
                <input type="password" name="password">
                <input type="submit" value="Enviar">
            </form>
            
        <?php else: ?>
            <h3><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>
        <?php endif; ?>

        <ul>
            
            <?php if(isset($_SESSION['admin'])): ?>
                <li><a href="http://localhost/master_php/tienda/?controller=categoria&action=index">Gestionar categorias</a></li>
                <li><a href="http://localhost/master_php/tienda/?controller=producto&action=gestion">Gestionar productos</a></li>
                <li><a href="<?=base_url?>?controller=pedido&action=gestion">Gestionar pedidos</a></li>
            <?php endif; ?>

            <?php if(isset($_SESSION['identity'])): ?>
                <li><a href="<?=base_url?>?controller=pedido&action=mis_pedidos">Mis pedidos</a></li>
                <li><a href="http://localhost/master_php/tienda/?controller=usuario&action=logout">Cerrar Sesion</a></li>
            <?php else: ?>
                <li><a href="http://localhost/master_php/tienda/?controller=usuario&action=registro">Registrate aqui</a></li>
            <?php endif; ?>
        </ul>


        
    </div>
</aside>