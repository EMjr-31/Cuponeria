<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <?php
        include './Vista/cabecera.php'
    ?>
</head>
<body>
    <?php
        include './Vista/menu.php';
        $valor = $_GET['precio_oferta_cupon'];
        $detalle = $_GET['descripccion'];
        $cantidades = $_GET['cantidad'];
        $total = $valor*$cantidades;
    ?>
    <div class="movies_section layout_padding">
        <div id="main-container">
            <table>
                <thead>
                    <tr>
                        <th>Descripccion</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tr>
                    <td><?php echo $detalle; ?></td>
                    <td><?php echo $cantidades; ?></td>
                    <td>$<?php echo number_format($valor,'2','.',','); ?></td>
                    <td>$<?php echo number_format($total,'2','.',','); ?></td>
                </tr>
                <thead>
                    <tr>
                        <th>Total</th>
                        <th><?php echo $cantidades; ?></th>
                        <th>$<?php echo number_format($valor,'2','.',','); ?></th>
                        <th>$<?php echo number_format($total,'2','.',','); ?></th>
                    </tr>
                </thead>
            </table>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image_17">
                            <div class="movie_main_1">
                                <div class="paly_bt"><a href="<?=PATH?>/Vista/Cupones/index.php">Agregar +</a></div>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="paly_compra"><a href="<?=PATH?>/Vista/Cupones/index.php">Finalizar</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <?php
        include './Vista/footer.php'
    ?>
</body>
</html>