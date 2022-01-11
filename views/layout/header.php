<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Tienda de camisas</title>
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
        <div id="container">
        <!--Cabecera-->
        <header id="header">
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Camisa Logo">
                <a href="<?=base_url?>">Tienda de camisetas</a>
            </div>
        </header>



        <!--Menu-->
        <?php $categorias = Utils::showCategorias(); ?>
        <nav id="menu">
            <ul>
                <li> <a href="<?=base_url?>">Inicio</a> </li>
                <?php while($cat = $categorias->fetch_object()): ?>
                    <li> <a href="<?=base_url?>?controller=categoria&action=ver&id=<?=$cat->id?>"><?=$cat->nombre?></a> </li>
                <?php endwhile; ?>
            </ul>
        </nav>


        <div id="content">