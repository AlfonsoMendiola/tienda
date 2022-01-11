<h3>Mis pedidos</h3>


<table>
    <tr>
        <th>Numero del pedido</th>
        <th>Coste</th>
        <th>Fecha</th>
        
    </tr>
    <?php while($ped = $pedidos->fetch_object() ): ?>
    <tr>
        <td> <a href="<?=base_url?>?controller=pedido&action=detalle&id=<?=$ped->id?>"> <?=$ped->id?> </a> </td>
        <td> <?=$ped->coste?> MXN</td>
        <td> <?=$ped->fecha?></td>
        
    </tr>
    <?php endwhile; ?>
</table>








