<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce-PHP</title>
    <link rel="shortcut icon" href="<?=base_url?>assets/img/camiseta.png">
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div id="container">
        <!--CABECERA-->
        <header id="header">
            <div id="logo">
                <img src="<?=base_url?>assets/img/camiseta.png" alt="Camiseta-Logo">
                <a href="index.php">
                    Tienda de Camisetas
                </a>
            </div>
        </header>
        
        <!--MENU-->
        <?php $categorias = Utils::showCategorias(); ?>
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">
                        Inicio
                    </a>            
                </li>
                <?php while ($cat = $categorias->fetch_object()): ?>
                    <li>
                        <a href="#">
                            <?=$cat->nombre?>
                        </a>
                    </li>
                <?php endwhile;?>
            </ul>
        </nav>
    <div id="content"> 