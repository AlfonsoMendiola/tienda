<?php if(isset($_SESSION['identity'])): ?>
    <h1>Hacer pedido</h1>
    <p> <a href="<?=base_url?>?controller=carrito&action=index">Ver los productos y el precio del pedido</a> </p>
    <br>
    <h3>Direccion de envio envio</h3>
    <form action="<?=base_url?>?controller=pedido&action=add" method="POST">
        <label for="provincia">Provincia</label>
        <input type="text" name="provincia" required>

        <label for="ciudad">Ciudad</label>
        <input type="text" name="localidad" required>

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" required>

        <input type="submit" value="Confirmar pedido">
    </form>




<?php else: ?>
    <h1>Necesitas estar identificado</h1>
    <p>Necesitas estar logeado en la web para poder realizar tu pedido</p>
<?php endif; ?>





